<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use Storage;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::paginate(15);

        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
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
            'title' => 'required|max:100',
            'image' => 'required',
            'short_description' =>  'required|max:500',
            'description' => 'required',
        ]);

        $path = $request->file('image')->store('uploads/articles', 'public');
        
        $article = new Articles(['image' => $path, 'title' => request('title'), 'short_description' => request('short_description'), 'description' => request('description'), 'views' => 0, 'likes' => 0, 'coments' => 0 ]);

        date_default_timezone_set('Europe/Kiev');

        $article->save();

        return redirect()->to('/admin/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Articles::find($id);

        return view('admin.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Articles::find($id);

        return view('admin.articles.edit', compact('article'));
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
        $article = Articles::find($id);

        if($request->file('image') == True){
            Storage::disk('public')->delete($article->image);
            $path = $request->file('image')->store('uploads/articles', 'public');
            $article->image = $path; 
        }

        if($request->title == True)
        {
            $article->title = $request->title;
        }

        if($request->short_description == True)
        {
            $article->short_description = $request->short_description;
        }

        if($request->description == True)
        {
            $article->description = $request->description;
        }
        
        $article->save();

        return redirect()->to('/admin/articles')->with('success', 'Article updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Articles::find($id);
        Storage::disk('public')->delete($article->image);
        $article->delete();
        return redirect()->to('/admin/articles')->with('success', 'Article deleted!');
    }
}
