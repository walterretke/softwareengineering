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

    public function cLanguage()
    {
        return Inertia::render('CLanguage');
    }

    public function cLibrary()
    {
        return Inertia::render('CLibrary');
    }

    public function cVariable()
    {
        return Inertia::render('CVariable');
    }
}

