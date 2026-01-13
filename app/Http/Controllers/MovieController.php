<?php

namespace App\Http\Controllers;
use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use Illuminate\http\Request;


class MovieController extends Controller
{

    public function index()
    {
        $movies = Movie::all();
        return view('movie.index', ['movies' => $movies]);
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
            'img' => $request->file('img')->store('public/images')
        ]);

        return redirect()->route('homepage')->with('successMessage', 'Hai correctamente inserito il tuo film');
    }
}