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

    public function show(Movie $movie)
    {
        return view('movie.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        return view('movie.edit', compact('movie'));
    }

    public function update(MovieRequest $request, Movie $movie)
    {
        $movie->update([
            'title' => $request->title,
            'director' => $request->director,
            'year' => $request->year,
            'plot' => $request->plot,
            'img' => $request->file('img')->store('img', 'public/image'),
        ]);
        return redirect()->route('homepage', compact('movie'))->with('successMessage', 'Hai correctamento
        modificato il tuo film preferito');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('homepage')->with('successMessage', 'Hai correctamento eliminato il tuo film
        preferito');
    }
}




