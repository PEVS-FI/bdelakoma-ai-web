<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Cache;

class ResearchController extends Controller
{
    public function __invoke()
    {
        return view('research', [
            'locale' => locale(),
        ]);
    }
}
