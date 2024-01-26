<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Category extends Model implements Sitemapable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'description',
        'image'
    ];

    protected $casts = [
        'parent_id' => 'integer'
    ];

    protected $appends = [
        'url'
    ];

    public function getUrlAttribute()
    {
        if ($this->parent) {
            return $this->slug . '/' . $this->parent->url;
        } else {
            return $this->slug;
        }
    }

    public function toSitemapTag(): Url|string|array
    {
        $url = Url::create(url('categories/' . $this->url))
            ->setLastModificationDate($this->updated_at)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            ->setPriority(0.8);

        if ($this->image) {
            $url->addImage($this->image->url);
        }

        return $url;
    }

    /**
     * Get the parent category that owns the category.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * Get the children categories for the category.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    /**
     * Get the products for the category.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the image for the category.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
