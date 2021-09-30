<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{

    public function index(){
        $songs = Song::with('singer')->with('category')->paginate(20);
        return response()->json($songs);
    }

    public function store(Request $request){

        $song = new Song;

        $request->validate([
            'title' => 'required'
        ]);

        $song->title = $request->title;
        $song->singer_id = $request->singer;
        $song->category_id = $request->category;
        $song->album_name = $request->album;
        if($song()){
            return response()->json('Song Added Successfully');
        }else{
            return response()->json('Something Went Wrong');
        }

    }

    public function update(Request $request,$id){

        $song = Song::find($id);

        $request->validate([
            'title' => 'required'
        ]);

        $song->title = $request->title;
        $song->singer_id = $request->singer;
        $song->category_id = $request->category;
        $song->album_name = $request->album;
        if($song()){
            return response()->json('Song Updated Successfully');
        }else{
            return response()->json('Something Went Wrong');
        }

    }

    public function destroy($id){

        $song = Song::find($id);
        if($song->delete()) {
            return response()->json('Song Deleted Successfully');
        }else{
            return response()->json('Something Went Wrong');
        }



    }

}
