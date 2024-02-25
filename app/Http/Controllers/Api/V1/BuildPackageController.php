<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class BuildPackageController extends Controller
{
    public function getBuildPackage(Request $request)
    {
        $products = Product::with('attributes', 'file', 'images')
            ->whereHas('attributes', function ($query) use ($request) {
                $query->where('slug', 'area')
                    ->whereRaw('CAST(value AS FLOAT) <= ?', [$request->area]);
            })
            ->whereHas('attributes', function ($query) use ($request) {
                $query->where('slug', 'density')
                    ->whereRaw('CAST(value AS INT) <= ?', [$request->density]);
            })
            ->whereHas('attributes', function ($query) use ($request) {
                $query->where('slug', 'karbari')
                    ->where('value', $request->karbari);
            })
            ->select('id', 'name', 'sku')
            ->get();


        return response()->json(
            $products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'sku' => $product->sku,
                    'images' => $product->images->map(function($image) {
                        return [
                            'id' => $image->id,
                            'url' => $image->url
                        ];
                    }),
                    'file' => [
                        'id' => $product->file->id,
                        'url' => $product->file->url,
                    ],
                    'attributes' => $product->attributes->map(function($attribute) {
                        return [
                            'id' => $attribute->id,
                            'slug' => $attribute->slug,
                            'name' => $attribute->name,
                            'value' => $attribute->pivot->value
                        ];
                    })
                ];
            }),
        );
    }
}
