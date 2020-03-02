<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {   
        $users = DB::table('users')->count();

        $articles = DB::table('articles')->count();

        $images = DB::table('images')->count();

        $music = DB::table('music')->count();

        return view('admin.dashboard', ['users' => $users, 'articles' => $articles, 'images' => $images, 'music' => $music]);
    }
}
