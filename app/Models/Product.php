<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'sku',
        'name',
        'slug',
        'short_description',
        'long_description',
        'stock_status',
        'quantity',
        'delivery_time',
        'customer_can_add_review',
        'price',
        'sale_price',
        'published',
    ];

    /**
     * The relationships that should always be loaded.
     * 
     * @var array
     */
    protected $with = [
        'category',
        'images',
        'file',
        'tags',
        'attributes',
    ];

    public function getSlugAttribute()
    {
        return str_replace(' ', '-', $this->attributes['slug']);
    }

    /**
     * Get the category that owns the product.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class)->select('id', 'name');
    }

    /**
     * Get the images for the product.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    /**
     * Get the file for the product.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function file()
    {
        return $this->hasOne(File::class);
    }

    /**
     * Get the tags for the product.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_product', 'product_id', 'tag_id');
    }

    /**
     * Get the attributes for the product.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'attribute_product', 'product_id', 'attribute_id')
            ->withPivot('value');
    }

    /**
     * Get user's that own the product.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Get published products.
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    /**
     * Get product discount
     * 
     * @return float
     */
    public function getDiscountAttribute()
    {
        return $this->sale_price ? round((1 - $this->sale_price / $this->price) * 100) : 0;
    }

    /**
     * Get product final price
     * 
     * @return float
     */
    public function getFinalPriceAttribute()
    {
        return $this->sale_price ? $this->sale_price : $this->price;
    }
}
