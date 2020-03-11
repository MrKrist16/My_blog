<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;
use Storage;

class MusicController extends Controller
{
    public function index()
    {
        $music = Music::all();

        return view('admin.music.index', compact('music'));
    }

    public function create()
    {
        return view('admin.music.create');
    }

    public function store(Request $request)
    {
		if(Music::musicCpmparison($request) == True){
			return redirect()->to('/admin/music')->with('failure', 'Song already exists!');
		}else{
			$path = $request->file('music')->storeAs('music', $request->name, 'public');

			$music = new Music(['url' => $path]);

			$music->save();

			return redirect()->to('/admin/music');
		}
    }

    public function destroy($id)
    {
        $music = Music::find($id);
        Storage::disk('public')->delete($music->url);
        $music->delete();
        return redirect()->to('/admin/music')->with('success', 'Music deleted!');
    }
}
