<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;

class ProductPolicy
{
    public function download(User $user, Product $product)
    {
        return $user->orders()->whereHas('products', function ($query) use ($product) {
            $query->where('product_id', $product->id);
        })->exists();
    }
}
