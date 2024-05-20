<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class CansiController extends Controller
{
    public function logic()
    {
        return Inertia::render('Logic');
    }
}

