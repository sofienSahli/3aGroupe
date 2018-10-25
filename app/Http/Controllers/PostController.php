<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compagnie;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;

        if ($request->hasFile('file')) {
            // $request->image->store();
            $fileName = $request->file("file");
            $path = $request->file->store("public/images");
            $post->image ="storage".substr($path,6);



        }
        $data = json_decode($request['spot'], true);
        $post->description = $data['description'];
        $post->title = $data['title'];
        $post->compagnie_id = $data['compagnie_id'];
        $post->save();
        return json_encode($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  $com = Post::find($id);
        return json_encode($com);

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  return $request->description;
        $post = Post::find( $id);
        $post->update(['description' => $request->description]);
        $idCopagnie = $post->compagnie_id;

        return redirect()->action('CompagnieController@show', $idCopagnie);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $idCopagnie = $post->compagnie_id;
        $post->delete();
        return redirect()->action('CompagnieController@show', $idCopagnie);
        //
    }
}
