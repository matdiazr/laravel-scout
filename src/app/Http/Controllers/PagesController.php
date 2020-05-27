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
        return view('posts.posts', compact('all_posts'));
    }
    
    public function detalle($id){
        $post = App\Post::findOrFail($id);
        return view('posts.detalle', compact('post'));
    }

    public function formPost(){
        return view('admin.posts.create');
    }

    public function crearPost(Request $request){
        //retorna todo el contenido del formulario
        // return $request->all();

        $postNuevo = new App\Post;
        $postNuevo->estado = true;
        $postNuevo->titulo = $request->titulo;
        $postNuevo->descripcion = $request->descripcion;

        $postNuevo->save();

        //nos devuelve a la misma pagina
        //return back;

        $all_posts = App\Post::all();
        return view('posts.posts', compact('all_posts'));
    }

    public function staff(){
        $staff_list = ['Matias', 'Luis', 'Jose'];
        return view('staff', compact('staff_list'));
    }
    
    public function ramas($name = null){
        return view('ramas', compact('name'));
    }
}
