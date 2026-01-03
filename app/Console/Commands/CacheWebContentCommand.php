<?php

namespace App\Console\Commands;

use App\Models\Page;
use App\Models\Project;
use App\Models\TeamMember;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class CacheWebContentCommand extends Command
{
    protected $signature = 'cache:web-content';

    protected $description = 'Cache web content';

    public function handle(): void
    {
        Cache::forget('projects.all');
        Project::refreshCache();

        Cache::forget('pages.all');
        Page::refreshCache();

        Cache::forget('team_members.all');
        TeamMember::refreshCache();

        $this->output->success('All web content cached.');
    }
}
