<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'path',
        'type',
        'size',
    ];

    /**
     * Get the product that owns the File
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Generate a signed download url for the file
     *
     * @return string
     */
    public function getUrlAttribute()
    {
        return URL::signedRoute('files.download', ['file' => $this->id]);
    }
}
