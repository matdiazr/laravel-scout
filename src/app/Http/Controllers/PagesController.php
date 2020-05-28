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
    
    public function detallePost($id){
        $post = App\Post::findOrFail($id);
        return view('posts.detalle', compact('post'));
    }

    public function formPost(){
        $all_posts = App\Post::all();
        return view('admin.posts.create', compact('all_posts'));
    }

    public function crearPost(Request $request){
        //retorna todo el contenido del formulario
        // return $request->all();

        $request->validate([
            'titulo' => 'required',
            'bajada' => 'required',
            'descripcion' => 'required'
        ]);

        $postNuevo = new App\Post;
        $postNuevo->estado = true;
        $postNuevo->titulo = $request->titulo;
        $postNuevo->bajada = $request->bajada;
        $postNuevo->descripcion = $request->descripcion;

        $postNuevo->save();

        //nos devuelve a la misma pagina
        return back()->with('respuesta', 'Post Agregado');
    }

    public function staff(){
        $staff_list = ['Matias', 'Luis', 'Jose'];
        return view('staff', compact('staff_list'));
    }
    
    public function ramas($name = null){
        return view('ramas', compact('name'));
    }
}
