@extends('layouts.frontend')

@section('content')

<div class ="card">
  <div class="card-header text-center">
    <h1>CATEGORY</h1>
    <a href="{{url('category/addss')}}">
    <button type="button" class="btn btn-primary">Add New Category</button>
    </a>


  
  </div>
  <div class="card-body">
    <table class="table table-striped table-bordered">
      <thread>
        <tr>
          <th>ID</th> 
          <th>Name</th>
          <th>Action</th>


        </tr>
      </thread>
      <tbody>
        @foreach ($categories as $Category)
        <tr>
          <td>{{$Category->id}}</td>  
          <td>{{$Category->name}}</td>
          <td>
            <a href="{{url('category/edit/'.$Category->id)}}" class="btn btn-success">Edit</a>
            <a href="{{url('deletecat/'.$Category->id)}}" class="btn btn-danger">Delete</a>

          </td>

        </tr>
        @endforeach
      </tbody>

    </table>

  </div>

</div>
@endsection