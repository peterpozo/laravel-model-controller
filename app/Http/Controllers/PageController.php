<?php

namespace App\Http\Controllers;

use App\Movie;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function movie() {
        // SELECT * FROM `Movie`
         $movies = Movie::all();

        return view('movie', compact('movies'));
    }
}
