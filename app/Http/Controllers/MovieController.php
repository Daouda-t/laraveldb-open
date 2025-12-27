<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use App\Models\movies;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // public $movies = [
    //      [
    //   'id' => '1',
    //  'title' => 'Incontri ravvicinati del terzo tipo',
    //  'director' => 's. MoviesIcons',
    //  'img' => '/media/poster/MovieIcons.jpg.jpg',
    //  'genres' => 'sci-fi'
    // ],
    //[
    //   'id' => '2',
    //  'title' => 'immaginidelci',
    //   'director' => 's. Mendes',
    //   'img' => '/media/poster/vikings03.jpg',
    //   'genres' =>
    //       'Guerra'
    //],
    //[
    //   'id' => '3',
    //  'title' => 'Quei bravi ragazzi',
    //  'director' => 'M. ket-har',
    //  'img' => '/media/poster/ket-har.jpg',
    // 'genres' =>
    //     'noir'
    //],
    // [
    //  'id' => '4',
    // 'title' => 'Barbi',
    // 'director' => 'G. vikings01',
    // 'img' => '/media/poster/vikings01.jpg',
    // 'genres' =>
    //     'Avventura'
    //],
    //[
    // 'id' => '5',
    // 'title' => 'lost in translation',
    // 'director' => 's. vikings02',
    // 'img' => '/media/poster/vikings02.jpg',
    // 'genres' =>
    //     'Drammatico'
    // ],
    // ];
    public function movielist()
    {
        $movies = movies::all();
        return view('movie.movies', ['movies' => $movies]);
    }
    // public function movieDetail($id)
    //  {
    //    foreach ($this->movies as $movie) {
    //        if ($id == $movie['id'] {
    //            return view('movie.moviedetail', ['movie' => $movie]);
    //         }
    //     }
    //  }

    public function create()
    {
        return view('movie.create');
    }

    public function store(MovieRequest $request)
    {
        $movie = movies::create([
            'title' => $request->title,
            'director' => $request->director,
            'year' => $request->year,
            'plot' => $request->plot,
            'img' => $request->file('img')->store('public/images')
        ]);

        return redirect()->route('homepage')->with('successMessage', 'Hai correctamente inserito il tuo film');
    }
}