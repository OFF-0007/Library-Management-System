<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::all();
        return view('publisher/index',compact('publishers'));
    } 
    public function addpublisher()
    {
        $publishers = Publisher::all();
        return view('publisher/add',compact('publishers'));
    } 
    public function insertpublisher(Request $request)
    {
        $publishers =  new Publisher();
        $publishers->id = $request->input('id');
        $publishers->name = $request->input('name');
        $publishers->address = $request->input('address');
        $publishers->mobile = $request->input('mobile');
        $publishers->save();
        return redirect('/publisher/add')->with('status',"Successfull");

    }
    public function editpublisher($id)

    {
        $publishers=Publisher::find($id);
        return view('publisher/edit',compact('publishers'));
    }
    public function updatepublisher(Request $request,$id)
    {
        $publishers=Publisher::find($id);
        $publishers->name=$request->input('name');
        $publishers->address = $request->input('address');
        $publishers->mobile = $request->input('mobile');
        $publishers->update();
        return redirect('/publisher/add')->with('status',"DATA ADDED SUCCESSFULLY");

    }
    public function removepub($id)
    {
        $publishers = Publisher::find($id);
        $publishers->delete();
        return redirect('/publisher/add')->with('status',"DATA DELETED SUCCESSFULLY");
    }
}


