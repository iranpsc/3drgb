<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;

class ProductPolicy
{
    public function create(User $user)
    {
        return $user->hasRole('admin');
    }

    public function update(User $user, Product $product)
    {
        return $user->hasRole('admin');
    }

    public function delete(User $user, Product $product)
    {
        return $user->hasRole('admin');
    }

    public function import(User $user)
    {
        return $user->hasRole('admin');
    }

    public function download(User $user, Product $product)
    {
        return $user->orders()->whereHas('products', function ($query) use ($product) {
            $query->where('product_id', $product->id);
        })->exists();
    }
}
