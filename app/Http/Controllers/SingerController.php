<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class SingerController extends Controller
{
    public function index(){
        $singers = Singer::paginate(10);

        return response()->json($singers);
    }

    public function store(Request $request){

        $singer = new Singer;

        $request->validate([
            'name' =>'required',
            'picture' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);
        if ($request->hasfile('image')) {
            $name = !empty($request->title) ? $request->title : config('app.name');

            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path("/images/singers/img/"), $name);

        }

        $singer->name = $request->name;
        $singer->picture = $name;
        $singer->description = $request->description;
        $singer->category = $request->category;
        if($singer->save()){
            return response()->json('Singer Added Successfully');
        }else{
            return response()->json('Something Went Wrong');
        }


    }

    public function update(Request $request, $id){

        $singer = Singer::find($id);

        $request->validate([
            'name' =>'required',
            'picture' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);
        if ($request->hasfile('image')) {
            $name = !empty($request->title) ? $request->title : config('app.name');

            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path("/images/singers/img/"), $name);

        }else{
            $name = $request->old_image;
        }

        $singer->name = $request->name;
        $singer->picture = $name;
        $singer->description = $request->description;
        $singer->category = $request->category;
        if($singer->save()){
            return response()->json('Singer Added Successfully');
        }else{
            return response()->json('Something Went Wrong');
        }



    }


    public function destroy($id){

        $singer = Singer::find($id);
        if($singer->delete()){
            return response()->json('Singer Deleted');
        }else{
            return response()->json('Something Went Wrong');
        }

    }


}
