<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student/index',compact('students'));
    }
    public function addstudent()
    {
        $students = Student::all();
        return view('student/add',compact('students'));
    } 
    public function insertstudent(Request $request)
    {
        $students =  new Student();
        $students->id = $request->input('id');
        $students->name = $request->input('name');
        $students->address = $request->input('address');
        $students->mobile = $request->input('mobile');
        $students->branch = $request->input('branch');
        $students->save();
        return redirect('/student/add')->with('status',"Successfull");

    }
    public function editstudent($id)

    {
        $students=Student::find($id);
        return view('student/edit',compact('students'));
    }
    public function updatestudent(Request $request,$id)
    {
        $students=Student::find($id);
        $students->name=$request->input('name');
        $students->address = $request->input('address');
        $students->mobile = $request->input('mobile');
        $students->branch = $request->input('branch');
        $students->update();
        return redirect('/student/add')->with('status',"DATA UPDATED SUCCESSFULLY");

    }
    public function removestu($id)
    {
        $students = Student::find($id);
        $students->delete();
        return redirect('/student/add')->with('status',"DATA DELETED SUCCESSFULLY");
    }
}
