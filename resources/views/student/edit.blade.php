
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT STUDENT DATA</title>
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
    <h1>edit student data</h1>
</div>
<form action="{{url('/update-datastu/'.$students->id)}}" method="POST">
  @csrf
  @method('PUT')
    <!-- {{ csrf_field() }} -->
    <div class="container  " style="width:800px;">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" value="{{ $students->name }}" name="name" id="name" aria-describedby="name">
    <div id="name" class="form-text">Enter Student Name</div>
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="address" class="form-control" value="{{ $students->address }}" name="address" id="address" aria-describedby="address">
    <div id="address" class="form-text">Enter Student Address</div>
  </div>
  
  <div class="mb-3">
    <label for="mobile" class="form-label">Mobile</label>
    <input type="mobile" class="form-control"value="{{ $students->mobile }}" name="mobile" id="mobile" aria-describedby="mobile">
    <div id="mobile" class="form-text">Enter Phone Number</div>
  </div>
  
  <div class="mb-3">
    <label for="branch" class="form-label">Branch</label>
    <input type="branch" class="form-control"value="{{ $students->branch }}" name="branch" id="branch" aria-describedby="branch">
    <div id="branch" class="form-text">Enter Student Branch</div>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<script src="assets/js/jquery.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>
