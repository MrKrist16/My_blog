<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Music extends Model
{
	protected $table = 'music';
    protected $fillable = [
        'url',
    ];

    public static function musicCpmparison(Request $request){
    	$music_db = DB::table('music')->pluck('url');

    	foreach ($music_db as $music) {
    		if($music == 'music/' . $request->name){
    			return True;
    		}else{
    			return False;
    		}
    	}
    }
}
