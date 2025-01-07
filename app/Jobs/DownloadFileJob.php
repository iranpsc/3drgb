<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DownloadFileJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $url;
    protected $fileData;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function handle()
    {
        $contents = file_get_contents($this->url);
        $extension = pathinfo(parse_url($this->url, PHP_URL_PATH), PATHINFO_EXTENSION);
        $this->fileData = [$contents, $extension];
    }

    public function getFileData()
    {
        return $this->fileData;
    }
}
