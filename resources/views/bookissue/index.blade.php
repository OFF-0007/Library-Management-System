@extends('layouts.frontend')

@section('content')

<div class ="card">
  <div class="card-header text-center">
    <h1>ISSUE BOOK</h1>
    <a href="{{url('bookissue/addi')}}">
    <button type="button" class="btn btn-primary">Issue New Book</button>
      </a>

  </div>
  <div class="card-body">
    <table class="table table-striped table-bordered">
                        <thead>
                            <th>S.No</th>
                            <th>Student Name</th>
                            <th>Book Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Issue Date</th>
                            <th>Return Date</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
      <tbody>

      <tbody>
                            @forelse ($bookissues as $bookissue)
                                <tr style='@if (date('Y-m-d') > $bookissue->return_date->format('d-m-Y') && $bookissue->issue_status == 'N') ) background:rgba(255,0,0,0.2) @endif'>
                                    <td>{{ $bookissue->id }}</td>
                                    <td>{{ $bookissue->student->name }}</td>
                                    <td>{{ $bookissue->bookissue->name }}</td>
                                    <td>{{ $bookissue->student->phone }}</td>
                                    <td>{{ $bookissue->student->email }}</td>
                                    <td>{{ $bookissue->issue_date->format('d M, Y') }}</td>
                                    <td>{{ $bookissue->return_date->format('d M, Y') }}</td>
                                    <td>
                                        @if ($bookissue->issue_status == 'Y')
                                            <span class='badge badge-success'>Returned</span>
                                        @else
                                            <span class='badge badge-danger'>Issued</span>
                                        @endif
                                        <td>
            <a href="{{url('bookissue/edit/'.$bookissue->id)}}" class="btn btn-success">Edit</a>
            <a href="{{url('deleteissu/'.$bookissue->id)}}" class="btn btn-danger">Delete</a>
                                        </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10">No Books Issued</td>
                                </tr>
                            @endforelse
                        </tbody>
      </tbody>

    </table>

  </div>

</div>
@endsection