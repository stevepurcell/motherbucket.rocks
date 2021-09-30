<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowsController extends Controller
{
    public function index()
    {
        return view('shows');
    }

    public function mshows()
    {
        return view('mshows');
    }
}
