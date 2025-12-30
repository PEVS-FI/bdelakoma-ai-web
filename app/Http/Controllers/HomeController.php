<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('index', [
            'locale' => locale(),
            'projects' => Cache::get('projects.all', static fn() => Project::query()->get())
        ]);
    }
}
