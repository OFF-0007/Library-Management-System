<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;


class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('author/index',compact('authors'));
    } 
    public function addauthor()
    {
        $authors = Author::all();
        return view('author/add',compact('authors'));
    } 
    public function insertauthor(Request $request)
    {
        $authors =  new Author
        ();
        $authors->id = $request->input('id');
        $authors->name = $request->input('name');
        $authors->save();
        return redirect('/author/add')->with('status',"Successfull");

    }
    public function editauthor($id)

    {
        $authors=Author::find($id);
        return view('author/edit',compact('authors'));
    }
    public function updateauthor(Request $request,$id)
    {
        $authors=Author::find($id);
        $authors->name=$request->input('name');
        $authors->update();
        return redirect('/author/add')->with('status',"DATA ADDED SUCCESSFULLY");

    }
    public function removeaut($id)
    {
        $authors = Author::find($id);
        $authors->delete();
        return redirect('/author/add')->with('status',"DATA DELETED SUCCESSFULLY");
    }
}
