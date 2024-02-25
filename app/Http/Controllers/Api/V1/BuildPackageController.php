<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\BuildPackageResource;
use App\Models\Product;
use Illuminate\Http\Request;

class BuildPackageController extends Controller
{
    public function getBuildPackage(Request $request)
    {
        $models = Product::with('attributes', 'images', 'file')
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
            ->whereHas('attributes', function ($query) use ($request) {
                $query->where('slug', 'used_in')
                    ->where('value', 'METARGB');
            })
            ->select('id', 'name', 'sku')
            ->paginate(9);

        return BuildPackageResource::collection($models);
    }
}
