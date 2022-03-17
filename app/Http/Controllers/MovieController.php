<?php

namespace App\Http\Controllers;

use App\Movie;

class MovieController extends Controller
{
    //| Funziona per andare in Home
    public function home()
    {
        return view('home');
    }

    //| Funzione per arrivare alla lista dei Movies
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }
}
