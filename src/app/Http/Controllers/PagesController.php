<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function portada(){
        $last_posts = App\Post::latest()->take(3)->get();
        return view('portada', compact('last_posts'));
    }

    public function noticias(){
        $all_posts = App\Post::latest()->paginate(6);
        // return $all_posts;
        return view('posts.posts', compact('all_posts'));
    }
    
    public function noticiaDetalle($id)
    {
        $post = App\Post::findOrFail($id);
        $post_type = App\Post::where('tipo', $post->tipo)->WhereNotIn('id', [$id])->latest()->take(3)->get();
        return view('posts.detalle', compact('post', 'post_type'));
    }

    public function staffs(){
        $all_staff = App\Staff::all();
        return view('staff', compact('all_staff'));
    }

    public function ramas($name = null){
        return view('ramas', compact('name'));
    }
    
   
}
