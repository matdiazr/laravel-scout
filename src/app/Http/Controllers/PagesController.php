<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }

    public function noticias(){
        $all_posts = App\Post::all();
        return view('posts', compact('all_posts'));
    }

    public function staff(){
        $staff_list = ['Matias', 'Luis', 'Jose'];
        return view('staff', compact('staff_list'));
    }
    
    public function ramas($name = null){
        return view('ramas', compact('name'));
    }
}
