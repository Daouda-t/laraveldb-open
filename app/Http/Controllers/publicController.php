<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;


class PublicController extends Controller
{
   public function homepage()
   {
    return view('welcome');
   }
   public function posts()
   {
    return view('posts');
   }
   
}
