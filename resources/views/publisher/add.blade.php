@extends('layouts.frontend')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUBLISHER</title>
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
/* botton */
html, body {
  height: 100%;
}

.wrap {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button {
  min-width: 300px;
  min-height: 60px;
  font-family: 'Nunito', sans-serif;
  font-size: 22px;
  text-transform: uppercase;
  letter-spacing: 1.3px;
  font-weight: 700;
  color: #313133;
  background: #4FD1C5;
background: linear-gradient(90deg, rgba(129,230,217,1) 0%, rgba(79,209,197,1) 100%);
  border: none;
  border-radius: 1000px;
  box-shadow: 12px 12px 24px rgba(79,209,197,.64);
  transition: all 0.3s ease-in-out 0s;
  cursor: pointer;
  outline: none;
  position: relative;
  padding: 10px;
  }

button::before {
content: '';
  border-radius: 100px;
  min-width: calc(300px + 12px);
  min-height: calc(60px + 12px);
  border: 6px solid #00FFCB;
  box-shadow: 0 0 60px rgba(0,255,203,.64);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: all .3s ease-in-out 0s;
}

.button:hover, .button:focus {
  color: #313133;
  transform: translateY(-6px);
}

button:hover::before, button:focus::before {
  opacity: 1;
}

button::after {
  content: '';
  width: 30px; height: 30px;
  border-radius: 100%;
  border: 6px solid #00FFCB;
  position: absolute;
  z-index: -1;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  animation: ring 1.5s infinite;
}

button:hover::after, button:focus::after {
  animation: none;
  display: none;
}

@keyframes ring {
  0% {
    width: 30px;
    height: 30px;
    opacity: 1;
  }
  100% {
    width: 300px;
    height: 300px;
    opacity: 0;
  }
}
/* botton */
    </style>
    
 
</head>
<body>

<div class="card-header text-center">
    <h1>Add New publisher</h1>
</div>
<form action="{{url('pub/insert-data')}}" method="POST">
  @csrf
    <!-- {{ csrf_field() }} -->
    <div class="container " style="width:900px;">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" name="name" id="name" aria-describedby="name">
    <div id="name" class="form-text">Enter Publisher Name</div>
  </div>
  
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="address" class="form-control" name="address" id="address" aria-describedby="address">
    <div id="address" class="form-text">Enter publisher Address</div>
  </div>
  
  <div class="mb-3">
    <label for="mobile" class="form-label">Mobile</label>
    <input type="mobile" class="form-control" name="mobile" id="mobile" aria-describedby="mobile">
    <div id="mobile" class="form-text">Enter Phone Number</div>
  <!-- </div>
   <button type="submit" class="btn btn-primary">Submit</button>
  </div> -->
  <div class="wrap">
  <button type="submit" button class="button">Submit</button>
</div>

</form>
<script src="assets/js/jquery.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>


</body>
</html>

@endsection
