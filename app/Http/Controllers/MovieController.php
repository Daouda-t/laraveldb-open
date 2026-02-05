<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;

use Illuminate\Http\Request;


class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movie.index', compact('movies'));
    }
    public function create()
    {
        return view('movie.create');
    }

    public function store(MovieRequest $request)
    {
        $movie = Movie::create([
            'title' => $request->title,
            'director' => $request->director,
            'year' => $request->year,
            'plot' => $request->plot,
            'img' => $request->file('img')->store('img', 'public'),

        ]);
        return redirect()->route('homepage')->with('successMessage', 'Hai correctamento inserito il tuo film
        preferito');
    }
}
