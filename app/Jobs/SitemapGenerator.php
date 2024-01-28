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

        Product::with('images')->published()->chunk(200, function ($products) use ($sitemap) {
            $sitemap->add($products);
        });

        $sitemap->writeToFile(public_path('sitemap/products-sitemap.xml'));

        $sitemap->create()->add(Tag::all())
            ->writeToFile(public_path('sitemap/tags-sitemap.xml'));

        $sitemap->create()->add(Category::with('image')->get())
            ->writeToFile(public_path('sitemap/categories-sitemap.xml'));
    }
}
