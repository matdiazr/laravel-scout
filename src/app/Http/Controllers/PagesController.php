<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function home(){
        $last_posts = App\Post::latest()->take(3)->get();
        return view('index', compact('last_posts'));
    }

    public function noticias(){
        $all_posts = App\Post::latest()->paginate(6);
        return view('posts.posts', compact('all_posts'));
    }
    
    //Post
    public function detallePost($id){
        $post = App\Post::findOrFail($id);
        return view('posts.detalle', compact('post'));
    }

    public function formPost(){
        $all_posts = App\Post::latest()->paginate(5);
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

    
    public function ramas($name = null){
        return view('ramas', compact('name'));
    }
    
    //staff
    public function staff(){
        $all_staff = App\Staff::all();
        return view('staff', compact('all_staff'));
    }
    
    public function formStaff(){
        $all_staff = App\Staff::latest()->paginate(5);
        return view('admin.staff.create', compact('all_staff'));
    }

    public function crearStaff(Request $request){
        //retorna todo el contenido del formulario
        // return $request->all();

        $request->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'curso' => 'required',
            // 'avatar' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $staffNuevo = new App\Staff;
        // agregar estado al modelo del 
        // $staffNuevo->estado = true;
        $staffNuevo->nombre = $request->nombre;
        $staffNuevo->edad = $request->edad;
        $staffNuevo->curso = $request->curso;
        $staffNuevo->rama = $request->rama;
        $staffNuevo->descripcion = $request->descripcion;

        //proceso de imagen pausado
        // if($file = $request->file('avatar')){
        //     $destinationPath = 'uploads/image/staff/';
        //     $profileImage = date('YmdHis') . '.' . $files->getClientOriginalExtension();
        //     $files->move($destinationPath, $profileImage);
        //     $staffNuevo->avatar = $profileImage;

        //     //metodo antiguo
        //     // $file = $request->file('avatar');
        //     // $extension = $file->getClientOriginalExtension();
        //     // $filename = time() . '.' . $extension;
        //     // $file->move('uploads/staff/', $file);
        //     // $staffNuevo->avatar = $file;
        // } else {
        //     return $request;
        //     $staffNuevo->avatar = '';
        // }

        $staffNuevo->save();

        //nos devuelve a la misma pagina
        return back()->with('respuesta', 'Staff Agregado');
    }

    public function editarStaff($id){
        $staff = App\Staff::findOrFail($id);
        return view('admin.staff.edit', compact('staff'));
    }

    public function actualizarStaff(Request $request, $id){
        $staffUpdate = App\Staff::findOrFail($id);
        $staffUpdate->nombre = $request->nombre;
        $staffUpdate->edad = $request->edad;
        $staffUpdate->curso = $request->curso;
        $staffUpdate->rama = $request->rama;
        $staffUpdate->descripcion = $request->descripcion;

        $staffUpdate->save();
        
        return back()->with('respuesta', 'Staff Modificado' );
    }

    public function eliminarStaff($id){
        $staffEliminar = App\Staff::findOrFail($id);
        $staffEliminar->delete();

        return back()->with('respuesta', 'Staff Eliminado');
    }
}
