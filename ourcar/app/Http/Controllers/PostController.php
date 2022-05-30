<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(){
        $posts =Post::all();
        return view('posts.index',compact('posts'));
    }

    public function index2(){
        $posts = Post::where('user_id', Auth::user()->id)->get();
        return view('posts.index2',compact('posts'));
    }  

 


/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    $categories = Category::pluck('name','id');
   
    return view('posts.create',compact('categories'));
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
   // return  Storage::put('posts', $request->file('file'));
 

   $post = Post::create($request->all());

   if ($request->hasFile('file')) {
    $file=$request->file("file");
    $nombre = bin2hex(random_bytes(5)).".".$file->guessExtension();
    $ruta="posts/".$nombre;
    $destino = public_path($ruta);

    

    copy($file, $destino);
    $post->images->url = $ruta;
}
   return redirect()->route('posts.index',$post);
}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show(Post $post){
    return view('posts.show', compact('post'));
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit(Post $post)
{
    $categories = Category::pluck('name','id');

    return view('posts.edit',compact('post','categories'));
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, Post $post)
{
    $post->update($request->all());
   
    
    return redirect()->route('posts.index',$post)->with('info','Post actualizado');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy(Post $post)
{
    $post->delete();

    return redirect()->route('posts.index',$post);
}

public function category( Category $category){
 return $category;
}




}

