<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function create()
    {
        return view('genres.create');
    }

    public function index()
    {
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }

    public function show(Genre $genre)
    {
        return view('genres.show', compact('genre'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        Genre::create([
            'name'=>$request->name
        ]);
        return redirect()->route('homepage')->with('successMessage', 'Hai creato la tua categoria');
    }
}
