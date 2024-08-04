<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Casts properties
     *
     * @return array
     */
    protected function casts() {
        return [
            'status' => 'int'
        ];
    }

    /**
     * Get the user that owns the order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the order items for the order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Get the transaction for the order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    /**
     * Get the products for the order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function products()
    {
        return $this->hasManyThrough(Product::class, OrderItem::class, 'order_id', 'id', 'id', 'product_id');
    }

    /**
     * Check if the order is paid.
     *
     * @return bool
     */
    public function isPaid()
    {
        return $this->status === 0;
    }
}
