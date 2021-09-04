<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $data = Song::where('status_id', '<=', '3')->orderby('artist', 'asc')->get();
        //$data = Song::where('status_id', '<=', '3')->orderby('artist', 'asc')->get()->groupBy('artist');
        return view('songs', compact('data'));        
    }
}
