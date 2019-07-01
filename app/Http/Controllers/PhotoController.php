<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     * Get /photos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('photo.index', ['name' => 'Afnan']);
    }

    /**
     * Show the form for creating a new resource.
     * GET	/photos/create
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST	/photos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'bail|required|max:255',
            'body' => 'required',
            ]);
        
        return view('photo.store', ['title' => $request->title , 'body' => $request->body]);
    }

    /**
     * Display the specified resource.
     * GET	/photos/{photo}
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $url = url("/photos/{$id}");
        
        return view('photo.show', ['id' => $id , 'url' => $url]);
    }

    /**
     * Show the form for editing the specified resource.
     * GET	/photos/{photo}/edit
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT/PATCH	/photos/{photo}
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE	/photos/{photo}
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
