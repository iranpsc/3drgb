<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Image extends Model implements Sitemapable
{
    use HasFactory;

    protected $fillable = [
        'path'
    ];

    /**
     * Get the parent imageable model (product or category).
     * 
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function imageable()
    {
        return $this->morphTo();
    }

    public function getUrlAttribute()
    {
        return url('storage/' . $this->path);
    }

    public function toSitemapTag(): Url|string|array
    {
        return Url::create($this->url)
            ->setLastModificationDate($this->updated_at)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(0.8);
    }
}
