@extends('layouts.frontend')

@section('content')

<div class ="card">
  <div class="card-header text-center">
    <h1>Books</h1>
    <a href="{{url('book/addb')}}">
    <button type="button" class="btn btn-primary">Add New Book</button>
      </a>

  </div>
  <div class="card-body">
    <table class="table table-striped table-bordered">
      <thread>
        <tr>
          <th>Book Code</th> 
          <th>Book Name</th>
          <th>Category</th>
          <th>Author</th>
          <th>Publisher</th>
          <th>Status</th>
          <th>Action</th>



        </tr>
      </thread>
      <tbody>
        @foreach ($books as $book)
        <tr>
          <td>{{$book->id}}</td>  
          <td>{{$book->name}}</td>
          <td>{{$book->category->name}}</td>
          <td>{{$book->author->name}}</td>
          <td>{{$book->publisher->name}}</td>
          <td>
                                        @if ($book->status == 'Y')
                                            <span class='badge badge-success'>Available</span>
                                        @else
                                            <span class='badge badge-danger'>Issued</span>
                                        @endif
                                    </td>
          <td>
            <a href="{{url('book/edit/'.$book->id)}}" class="btn btn-success">Edit</a>
            <a href="{{url('deleteboo/'.$book->id)}}" class="btn btn-danger">Delete</a>

          </td>

        </tr>
        @endforeach
      </tbody>

    </table>

  </div>

</div>
@endsection