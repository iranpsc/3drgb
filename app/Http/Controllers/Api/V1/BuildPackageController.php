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
                    'attributes' => [
                        'length' => $product->attributes->where('slug', 'length')->first()->pivot->value,
                        'width' => $product->attributes->where('slug', 'width')->first()->pivot->value,
                        'height' => $product->attributes->where('slug', 'height')->first()->pivot->value,
                        'area' => $product->attributes->where('slug', 'area')->first()->pivot->value,
                        'density' => $product->attributes->where('slug', 'density')->first()->pivot->value,
                        'karbari' => $product->attributes->where('slug', 'karbari')->first()->pivot->value,
                    ]
                ];
            }),
        ]);
    }
}
