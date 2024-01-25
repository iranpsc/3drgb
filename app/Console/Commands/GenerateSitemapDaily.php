<?php

namespace App\Console\Commands;

use App\Jobs\SitemapGenerator;
use Illuminate\Console\Command;

class GenerateSitemapDaily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap-daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        SitemapGenerator::dispatch();
        return Command::SUCCESS;
    }
}
