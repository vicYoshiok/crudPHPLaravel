<?php
namespace App\Http\Controllers;

//use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use App\Models\posts_table;
use Illuminate\Support\Facades\DB;

class PostController{

    public function index(){
        //$posts = DB::table("posts_tables")->get();

        $posts = posts_table::get();
        return view('posts.index', ['post' => $posts]);
    }
    public function show(posts_table $idPost){

        return view('posts.show', ['post'=> $idPost]);
    }
    public function create(){
        //metodo para crear posts registros etc a una base de datos
        return view('posts.create', ['post'=> new posts_table]);
    }
   
   public function store(Request $request)
    {
        // Crear una nueva instancia del modelo
        $post = new posts_table;
        //validar campos 
        $validate= $request->validate([
            'title'=> 'required',
            'description'=> 'required'
        ]);
        // Asignar datos al modelo una forma
        /*$post->posts1 = $request->input('title');
        $post->description = $request->input('description');

        // Guardar el registro en la base de datos
        $post->save();*/

        /*
        //asignar datos otra forma
        posts_table::create([
            'posts1'=> $request->input('title'),
            'description'=> $request->input('description'),
        ]);*/
        //asignar datos tercera forma
        posts_table::create($validate);
        //php artisan  make:reques savePostRequest;

        //usar session de laravel
        session()->flash('status','post created');

        //return redirect()-> route('posts.index');
        return to_route('posts.index');
    }


    public function edit(posts_table $idPost){
        return view('posts.edit', ['post'=> $idPost]);
    }

    public function destroy(posts_table $idPost){
        $idPost->delete();
        return to_route('posts.index') ->with('status','post eliminado');
    } 


    public function update(Request $request, posts_table $idPost){
               
        //$post =  posts_table::find($idPost);
        //validar campos 
        $validate1 = $request->validate([
            'title'=> 'required',
            'description'=> 'required'
        ]);
        // Asignar datos al modelo
        /* $idPost->posts1 = $request->input('title');
        $idPost->description = $request->input('description');

        // Guardar el registro en la base de datos
        $idPost->save();*/
        $idPost->update($validate1);

        //usar session de laravel
        session()->flash('status','post created');

        //return redirect()-> route('posts.index');
        return to_route('posts.show', $idPost);

    }

}


?>