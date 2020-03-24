<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;
use Storage;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Images::paginate(15);

        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $path = $request->file('image')->store('uploads/images', 'public');

       $image = new Images(['url' => $path]);

       $image->save();

       return redirect()->to('/admin/images');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $images = Images::find($id);

        return view('admin.images.edit', compact('images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = Images::find($id);

        Storage::disk('public')->delete($image->url);

        $path = $request->file('image')->store('uploads/images', 'public');

        $image->url = $path;
        $image->save();


        return redirect()->to('/admin/images')->with('success', 'Image updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Images::find($id);
        Storage::disk('public')->delete($image->url);
        $image->delete();
        return redirect()->to('/admin/images')->with('success', 'Image deleted!');
    }
}
