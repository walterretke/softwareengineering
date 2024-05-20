<?php

// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home');
    }

    public function cansi()
    {
        return Inertia::render('CAnsi');
    }

    public function contact()
    {
        return Inertia::render('Contact');
    }

    public function about()
    {
        return Inertia::render('About');
    }

    public function robotics()
    {
        return Inertia::render('Robotics');
    }
}

