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
        if ($request->compagnie != null) {
            if ($request->hasFile('image')) {
             // $request->image->store();
                $fileName = $request->file('image')->getClientOriginalName();
                $post = new Post;
                $post->title = $request->title;
                $post->description = $request->description;

                $request->image->storeAs("public/upload", $fileName);
                $post->image = 'storage/upload/' . $fileName;
                $post->compagnie_id = $request->compagnie;
                $post->save();
            }
            //  Session::flash('succes' , 'Post enregistrée');
            return redirect('compagnie/' . $post->compagnie_id);
        }
        return $request->all(); // $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id . "AA";

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
