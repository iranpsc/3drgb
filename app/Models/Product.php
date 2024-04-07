<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Str;

class Product extends Model implements Sitemapable
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
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'published' => 'boolean',
        'customer_can_add_review' => 'boolean',
    ];

    protected $appends = [
        'url',
        'discount',
        'final_price',
        'is_free'
    ];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getIsFreeAttribute()
    {
        return $this->price == 0;
    }

    public function getUrlAttribute()
    {
        return route('products.show', $this);
    }

    public function toSitemapTag(): Url|string|array
    {
        $url = Url::create($this->url)
            ->setLastModificationDate($this->updated_at)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(0.8);

        $this->loadMissing('images'); // eager load images (if not loaded yet)

        foreach ($this->images as $image) {
            $url->addImage($image->url);
        }

        return $url;
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
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get the attributes for the product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class)->withPivot('value');
    }

    /**
     * Get user's that own the product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('download_count', 'downloaded_at');
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
        return $this->sale_price > 0 ? $this->sale_price : $this->price;
    }

    /**
     * Get product sales
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function sales()
    {
        return $this->hasManyThrough(
            Order::class,
            OrderItem::class,
            'product_id',
            'id',
            'id',
            'order_id'
        )->where('status', 'OK');
    }

    /**
     * Get product reviews
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews()
    {
        return $this->hasMany(Review::class)->with('user')->approved();
    }

    /**
     * Get product orders
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Get product average rating
     *
     * @return float
     */
    public function hasOrders()
    {
        return $this->orders()->exists();
    }
}
