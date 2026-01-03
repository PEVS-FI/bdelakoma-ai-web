<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Project;

class PageController extends Controller
{
    public function __invoke(string $slug)
    {
        $page = Page::query()
                ->where('is_active', '=', true)
                ->where('slug_'.locale(), '=', $slug)
                ->first();

        if ($page === null) {
            return redirect()->to(localized_route('home'));
        }

        return view('research', [
            'page' => $page,
            'locale' => locale(),
        ]);
    }
}
