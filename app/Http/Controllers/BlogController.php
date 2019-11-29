<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	return view('layouts.programming');
    }

    public function music()
    {
    	return view('layouts.music');
    }

    public function self_development()
    {
    	return view('layouts.self_development');
    }
}
