<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Product;

class DownloadFileJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $url;
    protected $directory;
    protected $filename;
    protected $product;
    protected $type;

    public function __construct($url, $directory, Product $product, $type)
    {
        $this->url = $url;
        $this->directory = $directory;
        $this->product = $product;
        $this->type = $type;
    }

    public function handle()
    {
        $contents = file_get_contents($this->url);
        $extension = pathinfo(parse_url($this->url, PHP_URL_PATH), PATHINFO_EXTENSION);
        if (is_null($extension) || $extension !== 'png') {
            $extension = 'glb';
        }
        $this->filename = Str::random(40) . '.' . $extension;
        Storage::put($this->directory . $this->filename, $contents);

        // Save the file path to the database
        if ($this->type === 'image') {
            $this->product->images()->create([
                'path' => $this->directory . $this->filename,
            ]);
        } else {
            $this->product->file()->create([
                'name' => $this->product->name,
                'path' => $this->directory . $this->filename,
            ]);
        }
    }

    public function getFilename()
    {
        return $this->filename;
    }
}
