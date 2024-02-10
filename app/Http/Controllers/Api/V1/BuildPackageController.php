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
            ->get();

        return response()->json([
            $products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'sku' => $product->sku,
                    'image' => $product->images->first()->url,
                ];
            }),
        ]);
    }
}
