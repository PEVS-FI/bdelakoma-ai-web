<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function __invoke(string $slug)
    {
        $project = Project::query()
            ->where('is_active', '=', true)
            ->where('slug_'.locale(), '=', $slug)
            ->first();

        if($project === null)
        {
            return redirect()->to(localized_route('home'));
        }

        return view('project', [
            'project' => $project,
            'locale' => locale(),
        ]);
    }
}
