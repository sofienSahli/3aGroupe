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
        $compagnies = Compagnie::all();
        return json_encode($compagnies);
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
        $compagnie = new Compagnie;

        if ($request->hasFile('file')) {
            // $request->image->store();
            $fileName = $request->file("logo");
            $path = $request->file->store("public/images");
            $$compagnie->logo = "storage" . substr($path, 6);

        }
        $data = json_decode($request['compagnie'], true);
        $compagnie->name = $data['name'];
        $compagnie->gerant = $data['gerant'];
        $compagnie->emailGerant = $data['emailGerant'];
        $compagnie->telephone = $data['telephone'];
        $compagnie->address = $data['address'];
        $compagnie->save();
        return json_encode($compagnie);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $com = Compagnie::find($id);
        return json_encode($com);

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
