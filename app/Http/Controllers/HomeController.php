<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = 'aeokaok';
        return Inertia::render('Home', compact('data'));
    }
}
