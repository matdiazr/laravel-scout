<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }

    public function noticias(){
        return view('posts');
    }

    public function staff(){
        $staff_list = ['Matias', 'Luis', 'Jose'];
        return view('staff', compact('staff_list'));
    }
    
    public function ramas($name = null){
        return view('ramas', compact('name'));
    }
}
