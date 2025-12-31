<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Cache;

class TeamController extends Controller
{
    public function __invoke()
    {
        return view('team', [
            'locale' => locale(),
        ]);
    }
}
