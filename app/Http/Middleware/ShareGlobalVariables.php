<?php

namespace App\Http\Middleware;

use App\Models\Page;
use App\Models\Project;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ShareGlobalVariables
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        View::share('globalProjects',
            Cache::get('projects.all',
                static fn() => Cache::rememberForever(
                    'projects.all',
                    static fn() => Project::query()
                        ->where('is_active', true)
                        ->get()
                )
            )
        );

        View::share('globalPages',
            Cache::get('pages.global',
                static fn() => Cache::rememberForever(
                    'pages.global',
                    static fn() => Page::query()
                        ->where('show_in_menu', true)
                        ->where('is_active', true)
                        ->get()
                )
            )
        );

        return $next($request);
    }
}
