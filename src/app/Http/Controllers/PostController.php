<?php

namespace App\Http\Controllers;

use App;
use App\Post;
use App\Categoria;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_posts = Post::latest()->paginate(6);
        // return $all_posts;
        return view('posts.posts', compact('all_posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_posts = Post::latest()->paginate(5);
        $all_categoria = App\Categoria::all();
        return view('admin.posts.create', compact('all_posts', 'all_categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'bajada' => 'required',
            'descripcion' => 'required'
        ]);

        $postNuevo = new Post;
        $postNuevo->estado = true;
        $postNuevo->autor_id = auth()->user()->id;
        $postNuevo->titulo = $request->titulo;
        $postNuevo->bajada = $request->bajada;
        $postNuevo->descripcion = $request->descripcion;

        $image = $request->file('portada');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('asset/imagen/post/'), $new_name);

        $postNuevo->portada = $new_name;

        $postNuevo->save();
        
        $postNuevo->categoria()->attach($request->categoria);

        //nos devuelve a la misma pagina
        return back()->with('respuesta', 'Post Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.detalle', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $postUpdate = Post::findOrFail($id);
        $postUpdate->titulo = $request->titulo;
        $postUpdate->bajada = $request->bajada;
        $postUpdate->descripcion = $request->descripcion;
        $postUpdate->tipo = $request->tipo;
        $postUpdate->autor = auth()->user()->name;

        $postUpdate->save();
        
        return back()->with('respuesta', 'Post Modificado' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postEliminar = Post::findOrFail($id);
        foreach($postEliminar->categoria as $categoria){
            $postEliminar->categoria()->detach($categoria);
        }
        $postEliminar->delete();

        return back()->with('respuesta', 'Post Eliminado');
    }
}
