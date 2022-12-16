@extends('layouts.frontend')

@section('content')

<div class ="card">
  <div class="card-header text-center">
    <h1>STUDENT</h1>
    <a href="{{url('student/addsss')}}">
    <button type="button" class="btn btn-primary">Add New Student</button>
      </a>

  </div>
  <div class="card-body">
    <table class="table table-striped table-bordered">
      <thread>
        <tr>
          <th>ID</th> 
          <th>Name</th>
          <th>Address</th>
          <th>Mobile</th>
          <th>Branch</th>
          <th>Action</th>


        </tr>
      </thread>
      <tbody>
        @foreach ($students as $Student)
        <tr>
          <td>{{$Student->id}}</td>  
          <td>{{$Student->name}}</td>
          <td>{{$Student->address}}</td>
          <td>{{$Student->mobile}}</td>
          <td>{{$Student->branch}}</td>
          <td>
            <a href="{{url('student/edit/'.$Student->id)}}" class="btn btn-success">Edit</a>
            <a href="{{url('deletestu/'.$Student->id)}}" class="btn btn-danger">Delete</a>

          </td>

        </tr>
        @endforeach
      </tbody>

    </table>

  </div>

</div>
@endsection