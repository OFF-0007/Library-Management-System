<?php

namespace App\Http\Controllers;

use App\Models\BookIssues;
use App\Models\Book;
use App\Models\Settings;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StorebookissuesRequest;
use App\Http\Requests\UpdatebookissuesRequest;

class IssueController extends Controller
{
    
    public function index()
    {
        $bookissues = BookIssues::all();
        return view('bookissue/index',compact('bookissues'));
    } 
    public function addissu()
    {
        $bookissues = BookIssues::all();
        $books = Book::all();
        $students = Student::all();
        return view('bookissue/add',compact('bookissues','students','books'));
    } 
    public function insertissu(Request $request)
    {
        $bookissues =  new BookIssues();
        $bookissues->id = $request->input('id');
        $bookissues->student_id = $request->input('student_id');
        $bookissues->book_id = $request->input('book_id');


        $bookissues->save();
        return redirect('/bookissue/add')->with('status',"Successfull");

    }
    public function editissu($id)

    {
        $bookissues=BookIssues::find($id);
        $students = Student::all();
        $books = Book::all();
        return view('bookissue/edit',compact('bookissues','students','books'));
    }
    public function updateissu(Request $request,$id)
    {
        $bookissues=BookIssues::find($id);
        $bookissues->student_id = $request->input('student_id');
        $bookissues->book_id = $request->input('book_id');
        $bookissues->update();
        return view('bookissue/add',with('bookissues','students','books'));

    }
    public function removeissu($id)
    {
        $bookissues = BookIssues::find($id);
        $bookissues->delete();
        return redirect('/bookissue/add')->with('status',"DATA DELETED SUCCESSFULLY");
    }

}
