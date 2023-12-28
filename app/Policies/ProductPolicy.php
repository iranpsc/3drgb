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
        return $user->hasRole('admin') && ! $product->hasOrders();
    }

    public function import(User $user)
    {
        return $user->hasRole('admin');
    }

    public function download(User $user, Product $product): bool
    {
        return $user->orders()->whereHas('products', function ($query) use ($product) {
            $query->where('product_id', $product->id);
        })->exists();
    }

    public function addReview(User $user, Product $product): bool
    {
        return $user->hasPurchased($product) && ! $user->hasReviewed($product);
    }

    public function approveReview(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function deleteReview(User $user): bool
    {
        return $user->hasRole('admin');
    }
}
