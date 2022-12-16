@extends('layouts.frontend')

@section('content')

<div class ="card">
  <div class="card-header text-center">
    <h1>PUBLISHER</h1>
    <a href="{{url('publisher/adds')}}">
    <button type="button" class="btn btn-primary">Add New Publisher</button>

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
          <th>Action</th>


        </tr>
      </thread>
      <tbody>
        @foreach ($publishers as $Publisher)
        <tr>
          <td>{{$Publisher->id}}</td>  
          <td>{{$Publisher->name}}</td>
          <td>{{$Publisher->address}}</td>
          <td>{{$Publisher->mobile}}</td>
          <td>
            <a href="{{url('publisher/edit/'.$Publisher->id)}}" class="btn btn-success">Edit</a>
            <a href="{{url('deletepub/'.$Publisher->id)}}" class="btn btn-danger">Delete</a>

          </td>

        </tr>
        @endforeach
      </tbody>

    </table>

  </div>

</div>
@endsection