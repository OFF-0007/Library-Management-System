<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Models\Publisher;


class BookController extends Controller
{
    
        public function index()
        {
            $books = Book::all();
            return view('book/index',compact('books'));
        } 
        public function addbook()
        {
            $books = Book::all();
            $authors = Author::all();
            $categories = Category::all();
            $publishers = Publisher::all();
            return view('book/add',compact('books','categories','authors','publishers'));
        } 
        public function insertbook(Request $request)
        {
            $books =  new Book();
            $books->id = $request->input('id');
            $books->name = $request->input('name');
            $books->category_id = $request->input('category_id');
            $books->author_id = $request->input('author_id');
            $books->publisher_id = $request->input('publisher_id');
            $books->quantity = 1;


            $books->save();
            return redirect('/book/add')->with('status',"Successfull");
    
        }
        public function editbook($id)
    
        {
            $books=Book::find($id);
            $authors = Author::all();
            $categories = Category::all();
            $publishers = Publisher::all();
            return view('book/edit',compact('books','categories','authors','publishers'));
        }
        public function updatebook(Request $request,$id)
        {
            $books=Book::find($id);
            $books->name=$request->input('name');
            $books->category_id = $request->input('category_id');
            $books->author_id = $request->input('author_id');
            $books->publisher_id = $request->input('publisher_id');
            $books->quantity = 1;
            $books->update();
            return view('book/add',with('books','categories','authors','publishers'));
    
        }
        public function removeboo($id)
        {
            $books = Book::find($id);
            $books->delete();
            return redirect('/book/add')->with('status',"DATA DELETED SUCCESSFULLY");
        }
    
}
