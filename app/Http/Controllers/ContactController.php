<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Cache;

class ContactController extends Controller
{
    public function __invoke()
    {
        return view('contact', [
            'locale' => locale()
        ]);
    }
}
