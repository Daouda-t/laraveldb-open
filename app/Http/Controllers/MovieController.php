<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use App\Models\Genre;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controller\Middleware; 
class MovieController extends Controller implements HasMiddleware
{

public static function middleware(): array
{
   return [
    //new Middleware('auth', except: ['index']),];
    'auth'];
    }
   

       public function index()
    {  
        $movies = Movie::all();
        return view('movie.index', compact('movies'));
    }
    public function create()
    {
        $genres = Genre::all();
        return view('movie.create', compact('genres'));
    }

    public function store(MovieRequest $request)
    {
        $movie = Movie::create([
            'title' => $request->title,
            'director' => $request->director,
            'year' => $request->year,
            'plot' => $request->plot,
            'img' => $request->file('img')->store('img', 'public'),
            'user_id' => Auth::user()->id
        ]);

        $movie->genres()->attach($request->genres);
        return redirect()->route('homepage')->with('successMessage', 'Hai correctamento inserito il tuo film
        preferito');
    }

    public function show(Movie $movie)
    {
        return view('movie.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        if ($movie->user_id == Auth::user()->id) {
        return view('movie.edit', compact('movie'));
        }else{
            return redirect()->route('homepage')->with('errorMessage', 'Non puoi vedere questa paqina');
        }
    }

    public function update(MovieRequest $request, Movie $movie)
    {
        if ($movie->user_id == Auth::user()->id) {
        $movie->update([
            $movie->title => $request->title,
            $movie->director => $request->director,
            $movie->year => $request->year,
            $movie->plot => $request->plot,
            'img' => $request->file('img')->store('img', 'public'),

        ]);
        return redirect()->route('homepage', compact('movie'))->with('successMessage', 'Hai correctamento
        modificato il tuo film preferito');
    }
    else{
        return redirect()->route('homepage')->with('errorMessage', 'Non puoi vedere questa paqina');
    }
    }

    public function destroy(Movie $movie)
    {
        if ($movie->user_id == Auth::user()->id) {
        $movie->delete();
        return redirect()->route('homepage')->with('successMessage', 'Hai correctamento eliminato il tuo film
        preferito');
    } else{
        return redirect()->route('homepage')->with('errorMessage', 'Non puoi vedere questa paqina');
    }
    }
}




