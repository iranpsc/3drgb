<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class BuildPackageController extends Controller
{
    public function getBuildPackage(Request $request)
    {
        $products = Product::with(['images' => function ($query) {
            $query->limit(1);
        }])
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
            ->with('attributes')
            ->get();

        return response()->json([
            $products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'sku' => $product->sku,
                    'image' => $product->images->first()->url,
                    'attributes' => $product->attributes->filter(function ($attribute) {
                        $allowedAttributes = ['width', 'height', 'length', 'area', 'density', 'karbari'];
                        return in_array($attribute->slug, $allowedAttributes);
                    })->map(function ($attribute) {
                        return [
                            'width' => $attribute->slug === 'width' ? $attribute->pivot->value : '',
                            'height' => $attribute->slug === 'height' ? $attribute->pivot->value : '',
                            'length' => $attribute->slug === 'length' ? $attribute->pivot->value : '',
                            'area' => $attribute->slug === 'area' ? $attribute->pivot->value : '',
                            'density' => $attribute->slug === 'density' ? $attribute->pivot->value : '',
                            'karbari' => $attribute->slug === 'karbari' ? $attribute->pivot->value : '',
                        ];
                    }),
                ];
            }),
        ]);
    }
}
