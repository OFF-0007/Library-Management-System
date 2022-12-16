@extends('layouts.frontend')

@section('content')

<div class ="card">
  <div class="card-header text-center">
    <h1>AUTHOR</h1>
    <a href="{{url('author/addssss')}}">
    <button type="button" class="btn btn-primary">Add New Author</button>
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
        @foreach ($authors as $Author)
        <tr>
          <td>{{$Author->id}}</td>  
          <td>{{$Author->name}}</td>
          <td>
            <a href="{{url('author/edit/'.$Author->id)}}" class="btn btn-success">Edit</a>
            <a href="{{url('deleteaut/'.$Author->id)}}" class="btn btn-danger">Delete</a>

          </td>

        </tr>
        @endforeach
      </tbody>

    </table>

  </div>

</div>
@endsection