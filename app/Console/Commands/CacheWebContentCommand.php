<?php

namespace App\Console\Commands;

use App\Models\Project;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class CacheWebContentCommand extends Command
{
    protected $signature = 'cache:web-content';

    protected $description = 'Cache web content';

    public function handle(): void
    {
        $projects = Project::all();

        Cache::forever('projects', $projects);

        $this->info('All projects have been cached successfully.');
    }
}
