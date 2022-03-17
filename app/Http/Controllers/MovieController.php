<?php

namespace App\Http\Controllers;

use App\Movie;

use Illuminate\Http\Request;

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
        $movie = Movie::all();

        return view('movies.index', compact('movie'));
    }
}
