<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Set status attribute
     *
     * @param mix $value
     * @return string
     */
    public function setStatusAttribute($value)
    {
        if ($value !== 0) {
            return 'NOK';
        } elseif ($value === 0) {
            return 'OK';
        } else {
            return 'pending';
        }
    }

    /**
     * Get the order for the transaction.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Scope a query to only include pending transactions.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }
}
