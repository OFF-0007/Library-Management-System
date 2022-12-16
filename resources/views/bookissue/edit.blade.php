
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Issue Data</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
 

    <style>


 .container
{
background-color: lightblue;
display: block;
position: center;
z-index: 0;
margin: 15px auto 0 5rem;
margin-left: 33rem; 
padding: 5rem 4rem 0 4rem;
width: 100%;
max-width: 525px;
min-height: 500px;
box-shadow: 0 50px 70px -20px rgba(0,0,0,0.85);
}
.container:after
{
content: '';
display: inline-block;
position: relative;
z-index: 0;
top: 0;
right: 0;
bottom: 0;
left: 0;
box-shadow: 0 -20px 150px -20px rgba(0,0,0,0.5);

}
</style>
</head>
<body>
<div class="card-header text-center">
    <h1>Edit Issue Data</h1>
</div>
<form action="{{url('/update-dataissu/'.$bookissues->id)}}" method="POST">
  @csrf
  @method('PUT')
    <!-- {{ csrf_field() }} -->
    <div class="container  " style="width:800px;">
    <div class="form-group">
    <tr>
                                <td>StudentName: </td>
                                <td><b>{{ $book->student->name }}</b></td>
                            </tr>
                            <tr>
                                <td>Book Name : </td>
                                <td><b>{{ $book->book->name }}</b></td>
                            </tr>
                            <tr>
                                <td>Phone : </td>
                                <td><b>{{ $book->student->phone }}</b></td>
                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td><b>{{ $book->student->email }}</b></td>
                            </tr>
                            <tr>
                                <td>Issue Date : </td>
                                <td><b>{{ $book->issue_date->format('d M, Y') }}</b></td>
                            </tr>
                            <tr>
                                <td>Return Date : </td>
                                <td><b>{{ $book->return_date->format('d M, Y') }}</b></td>
                            </tr>
                            @if ($book->issue_status == 'Y')
                                <tr>
                                    <td>Status</td>
                                    <td><b>Returned</b></td>
                                </tr>
                                <tr>
                                    <td>Returned On</td>
                                    <td><b>{{ $book->return_day->format('d M, Y') }}</b></td>
                                </tr>
                            @else
                                @if (date('Y-m-d') > $book->return_date->format('d-m-Y'))
                                    <tr>
                                        <td>Fine</td>
                                        <td>Rs. {{ $fine }}</td>
                                    </tr>
                                @endif
                            @endif
                        </table>
                        @if ($book->issue_status == 'N')
                            <form action="{{ route('book_issue.update', $book->id) }}" method="post" autocomplete="off">
                                @csrf
                                <input type='submit' class='btn btn-danger' name='save' value='Return Book'>
                            </form>
                        @endif
                            
                        </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<script src="assets/js/jquery.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>
