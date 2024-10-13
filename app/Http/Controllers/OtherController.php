<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
// use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function privacy()
    {
        return Inertia::render('Other/Privacy');
    }
}
