<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category/index',compact('categories'));
    } 
    public function addcategory()
    {
        $categories = Category::all();
        return view('category/add',compact('categories'));
    } 
    public function insertcategory(Request $request)
    {
        $categories =  new Category();
        $categories->id = $request->input('id');
        $categories->name = $request->input('name');
        $categories->save();
        return redirect('/category/add')->with('status',"Successfull");

    }
    public function editcategory($id)

    {
        $categories=Category::find($id);
        return view('category/edit',compact('categories'));
    }
    public function updatecategory(Request $request,$id)
    {
        $categories=Category::find($id);
        $categories->name=$request->input('name');
        $categories->update();
        return redirect('/category/add')->with('status',"DATA ADDED SUCCESSFULLY");

    }
    public function removecat($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect('/category/add')->with('status',"DATA DELETED SUCCESSFULLY");
    }
}
