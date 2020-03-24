<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Articles;
use App\Images;

class BlogController extends Controller
{
    public function mainpage()
    {
        return view('layouts.homepage');
    }

    public function about_me()
    {
        return view('layouts.about_me');
    }

    public function programming()
    {   
        $articles = Articles::paginate(10);

    	return view('layouts.programming', compact('articles'));
    }

    public function self_development()
    {   
        $images = Images::paginate(10);

    	return view('layouts.self_development', compact('images'));
    }

    public function image_download($id)
    {
        $image = Images::find($id);

        $path = $image->url;

        return Storage::disk('public')->download($path);
    }

    public function show($id)
    {
        $article = Articles::find($id);

        $article->views += 1;
        $article->save();

        return view('layouts.show', compact('article'));
    }
}
