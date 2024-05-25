<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class UserAssetController extends Controller
{
    /**
     * Get the categories of the user's products.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCategories()
    {
        $user = request()->user();

        if (request()->query('defaults') == true) {
            $categories = Category::doesntHave('children')->withCount('products')->with('image')->get();

            $categories = $categories->map(function ($category) {
                return [
                    'id' => $category->id,
                    'name' => $category->name,
                    'slug' => $category->slug,
                    'image' => $category->image->url ?? null,
                    'quantity' => $category->products_count,
                ];
            });
        } else {
            $categories = $user->products()->with('category.image')->withPivot('quantity')->get();

            $categories = $categories->map(function ($product) use ($categories) {

                $category = $product->category;
                $quantity = $categories->where('category_id', $category->id)->sum('pivot.quantity');

                return [
                    'id' => $category->id,
                    'name' => $category->name,
                    'slug' => $category->slug,
                    'image' => $category->image->url ?? null,
                    'quantity' => $quantity,
                ];
            })->unique();
        }

        return response()->json(['data' => $categories]);
    }

    /**
     * Get the products of the user's category.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCategoryProducts(Category $category)
    {
        $user = request()->user();

        if (request()->query('defaults') == true) {
            $products = Product::where('category_id', $category->id)
                ->with('oldestImage')
                ->get();

            $products = $products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'image' => $product->oldestImage->url,
                ];
            });
        } else {
            $products = $user->products()
                ->where('category_id', $category->id)
                ->with('oldestImage')
                ->withPivot('quantity')
                ->orderByPivot('updated_at', 'desc')
                ->get();

            $products = $products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'image' => $product->oldestImage->url,
                    'quantity' => $product->pivot->quantity,
                ];
            });
        }

        return response()->json(['data' => $products]);
    }

    /**
     * Get the product of the user.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProduct(Product $product)
    {
        $product = $product->load('file', 'attributes', 'attributes', 'images')
            ->loadAvg('reviews', 'rating');

        return response()->json(['data' => [
            'id' => $product->id,
            'name' => $product->name,
            'file' => $product->file->url,
            'rating' => $product->reviews_avg_rating,
            'images' => $product->images->map(function ($image) {
                return $image->url;
            }),
            'attributes' => $product->attributes->map(function ($attribute) {
                return [
                    'id' => $attribute->id,
                    'name' => $attribute->name,
                    'value' => $attribute->pivot->value,
                ];
            }),
        ]]);
    }

    /**
     * Search the products of the user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(Request $request)
    {
        $request->validate([
            'q' => 'required|string',
        ]);

        $user = request()->user();

        if (request()->query('defaults') == true) {
            $products = Product::where('name', 'like', '%' . $request->query('q') . '%')
                ->with('oldestImage')
                ->get();

            $products = $products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'image' => $product->oldestImage->url,
                ];
            });
        } else {
            $products = $user->products()
                ->where('name', 'like', '%' . $request->query('q') . '%')
                ->with('oldestImage')
                ->withPivot('quantity')
                ->orderByPivot('updated_at', 'desc')
                ->get();

            $products = $products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'image' => $product->oldestImage->url,
                    'quantity' => $product->pivot->quantity,
                ];
            });
        }

        return response()->json(['data' => $products]);
    }

    /**
     * Get the avatars of the user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAvatars()
    {
        $avatarCategory = cache()->remember('avatar_category', now()->addWeek(), function () {
            return Category::where('slug', 'avatar')->first();
        });

        $avatarCategoryChildren = cache()->remember('avatar_category_children', now()->addWeek(), function () use ($avatarCategory) {
            return $avatarCategory->children()->get();
        });

        $user = request()->user();

        $avatars = $user->products()
            ->whereIn('category_id', $avatarCategoryChildren->pluck('id'))
            ->with('oldestImage')
            ->withPivot('quantity')
            ->orderByPivot('updated_at', 'desc')
            ->get();

        $avatars = $avatars->map(function ($avatar) {
            return [
                'id' => $avatar->id,
                'name' => $avatar->name,
                'image' => $avatar->oldestImage->url,
                'quantity' => $avatar->pivot->quantity,
            ];
        });

        return response()->json(['data' => $avatars]);
    }

    /**
     * Get the avatar of the user.
     *
     * @param int $avatarId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAvatar(int $avatarId)
    {
        $user = request()->user();

        $avatar = $user->products()
            ->where('product_id', $avatarId)
            ->with('file', 'attributes', 'attributes', 'images')
            ->withAvg('reviews', 'rating')
            ->withPivot('quantity')
            ->first();

        abort_if(is_null($avatar), 404, 'Avatar not found.');

        return response()->json(['data' => [
            'id' => $avatar->id,
            'name' => $avatar->name,
            'file' => $avatar->file->url,
            'quantity' => $avatar->pivot->quantity,
            'rating' => $avatar->reviews_avg_rating,
            'images' => $avatar->images->map(function ($image) {
                return $image->url;
            }),
            'attributes' => $avatar->attributes->map(function ($attribute) {
                return [
                    'id' => $attribute->id,
                    'name' => $attribute->name,
                    'value' => $attribute->pivot->value,
                ];
            }),
        ]]);
    }
}
