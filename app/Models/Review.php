<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'comment',
        'rating',
        'approved',
        'approved_at',
        'approved_by',
    ];

    /**
     * Get the product that owns the review.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class)->select('id', 'name');
    }

    /**
     * Get the user that owns the review.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class)->select('id', 'name', 'avatar');
    }

    /**
     * Scope a query to only include approved reviews.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeApproved($query)
    {
        $query->where('approved', 1);
    }

    /**
     * Set the approved_at and approved_by attributes.
     *
     * @param string $approved_by
     * @return void
     */
    public function approve($approved_by)
    {
        $this->approved = true;
        $this->approved_at = now();
        $this->approved_by = $approved_by;
        $this->save();
    }
}
