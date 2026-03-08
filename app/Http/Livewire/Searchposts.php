<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Searchposts extends Component
{
    public $search = "";

    public function render()
    {
        if(!$this->search){
            $posts = Post::all();
        }else{
            if(!Post::where('title', 'like', '%' . $this->search . '%')->exists()){
                $posts = Post::all();
            session()->flash('alert', 'Nessun risultato trovato');
             }else{
              $posts = Post::where('title', 'like', '%' . $this->search. '%')->get();
             }
        } 
        return view('livewire.search-posts', compact('posts'));
    }
}