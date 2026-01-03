<?php

namespace App\Http\Controllers;

class AllProjectsController extends Controller
{
    public function __invoke()
    {
        return view('projects', [
            'locale' => locale(),
        ]);
    }
}
