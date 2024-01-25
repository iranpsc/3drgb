<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Category;
use Spatie\Sitemap\Sitemap;

class SitemapGenerator implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(Sitemap $sitemap): void
    {
        $sitemap->create();

        Product::with('images')->chunk(200, function ($products) use ($sitemap) {
            foreach ($products as $product) {
                $sitemap->add($product->url);
                $sitemap->add($product->images);
            }
        });

        $sitemap->add(Tag::all());

        $sitemap->add(Category::all());

        $sitemap->writeToFile(public_path('sitemap/sitemap.xml'));
    }
}
