<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compagnie;
use Session;
use App\Post;
use Illuminate\Support\Facades\DB;

class CompagnieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compagny = Post::where('compagnie_id', 1)->simplePaginate(4);
        $compagnies = Compagnie::all();
        if (Session::has('user')) {
            return view("compagnies.index", ['compagnies' => $compagnies]);
        }
        return view('welcome', ['compagnies' => $compagnies, "comp" => $compagny]);
    }

    public function home()
    {
        $compagnies = Compagnie::all();
        return view('index', ['compagnies' => $compagnies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('home');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id == null)
            $id = 1;

        $compagnies = Compagnie::all();
        if (Session::has('user')) {
            $com = Compagnie::find($id);
            return view("compagnies.show", ['compagnie' => $com]);
        } else {

            $com = Compagnie::find($id);
            $posts = Post::where('compagnie_id', $id)->simplePaginate(5);
            return view('welcome', ['compagnies' => $compagnies, "comp" => $posts, 'compagny' => $com]);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect('home');

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
        return redirect('home');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect('home');

    }
}
