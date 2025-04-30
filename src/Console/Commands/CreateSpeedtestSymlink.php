<?php

namespace Fingoweb\Speedtest\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateSpeedtestSymlink extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'speedtest:link';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a symbolic link for the speedtest assets';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $target = base_path('vendor/fingoweb/speedtest/public');
        $link = public_path('speedtest');

        if (file_exists($link) || is_link($link)) {
            File::delete($link);
        }

        symlink($target, $link);

        $this->info("Symbolic link created: {$link} -> {$target}");
    }
}
