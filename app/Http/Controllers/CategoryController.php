<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{

    public function index(){

        $categories = Category::paginate(10);
        return response()->json($categories);


    }

    public function store(Request $request)
    {
        $category = new Category();
        $request->validate([
            'category' => 'required'

        ]);

        $category->category = $request->category;
        if($category->save()){

            return response()->json('Category Added Successfully');

        }else{

            return response()->json('OOps Something Went Wrong!');

        }


    }

    public function update(Request $request,$id){

        $category = Category::find($id);
        $request->validate([
            'category' => 'required'

        ]);
        $category->category = $request->category;
        if($category->store()){

            return response()->json('Category Updated Successfully');

        }else{

            return response()->json('OOps Something Went Wrong!');

        }

    }


    public function destroy($id){
        $category = Category::find($id);


        if($category->delete()){

            return response()->json('Category Deleted Successfully');

        }else{

            return response()->json('OOps Something Went Wrong!');

        }





    }

}
