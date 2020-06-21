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
        $all_category = App\Categoria::all();
        $respuesta = null;

        if(empty($all_posts)){
            $respuesta = "No se encontraron Noticias";
        }

        return view('posts.posts', compact('all_posts', 'respuesta', 'all_category'));
    }
    
    public function noticiaDetalle($id)
    {
        $post = App\Post::findOrFail($id);
        // $categoria_id = $post->categoria->first()->id;
        $categoria_nombre = "evento";

        $post_relacionados = App\Post::whereNotIn('id', [$id])->whereHas('categoria', function ($q) use ($categoria_nombre) {
            $q->where('nombre', $categoria_nombre); 
        })->latest()->take(3)->get();

        // $post_relacionados = App\Post::where('categoria->first()', $post->categoria->first()->id)->get();
        // $post_type = App\Post::where('tipo', $post->tipo)->WhereNotIn('id', [$id])->latest()->take(3)->get();

        return view('posts.detalle', compact('post', 'post_relacionados'));
    }

    public function filtrarNoticias(Request $request){
        //mejorar la query con scope... proximamente
        // $all_posts = App\Post::where('titulo', 'like', "%$request->filtro%")->orWhere('tipo', 'like', "%$request->filtro%")->latest()->paginate(6);
        
        $filtro = $request->filtro;
        $all_category = App\Categoria::all();

        $all_posts = App\Post::whereHas('categoria', function ($q) use ($filtro) {
            $q->where('nombre','like', "%$filtro%"); 
        })->orWhere('titulo', 'like', "%$filtro%")->latest()->paginate(6);

        $respuesta = null;

        if(count($all_posts) == 0){
            $respuesta = "No se encontraron Noticias";
        }

        return view('posts.posts', compact('all_posts', 'respuesta', 'all_category'));
    }

    public function filtrarNoticiasTipo($nombre){
        // $all_posts = App\Post::where('category_id', $id)->latest()->paginate(6);
        $all_posts = App\Post::whereHas('categoria', function ($q) use ($nombre) {
            $q->where('nombre', $nombre); 
        })->latest()->paginate(6);

        $all_category = App\Categoria::all();
        $respuesta = null;

        if(count($all_posts) == 0){
            $respuesta = "No se encontraron Noticias";
        }

        return view('posts.posts', compact('all_posts', 'respuesta', 'all_category'));
    }

    public function staffs(){
        $all_staff = App\Staff::all();
        return view('staff', compact('all_staff'));
    }

    public function ramas($name = null){
        return view('ramas', compact('name'));
    }
    
   
}
