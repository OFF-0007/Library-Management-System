
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISSUE BOOK</title>
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
    <h1>Issue New Book</h1>
</div>
<form action="{{url('issu/insert-data')}}" method="POST">
  @csrf
    <!-- {{ csrf_field() }} -->
                        <div class="form-group">
                            <label>Student Name</label>
                            <select class="form-control @error('student_id') isinvalid @enderror " name="student_id" required>
                                <option value="">Select Student</option>
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div class="form-group">
                            <label>Book Name</label>
                            <select class="form-control @error('book_id') isinvalid @enderror " name="book_id" required>
                                <option value="">Select Book</option>
                                @foreach ($books as $book)
                                    <option value="{{ $book->id }}">{{ $book->name }}</option>
                                @endforeach
                            </select>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<script src="assets/js/jquery.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>
