<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
 
  </head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #DAFCFC;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{asset('assets/images/2.jpg')}}" class="logo" height="100" alt="image here">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('publisher/add')}}">Publisher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('student/add')}}">Student</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{url('category/add')}}">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('author/add')}}">Author</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('book/add')}}">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('bookissue/add')}}">Issue Book</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Add New
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('publisher/add')}}">Publisher</a></li>
            <li><a class="dropdown-item" href="{{ url('student/add')}}">Student</a></li>
            <li><a class="dropdown-item" href="{{ url('category/add')}}">Category</a></li>
            <li><a class="dropdown-item" href="{{ url('book/add')}}">Books</a></li>
            <li><a class="dropdown-item" href="{{ url('bookissue/add')}}">Issue Books</a></li>


            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ url('/')}}">Home</a></li>
          </ul>
        </li>
        
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<script src="{{asset('assets/js/jquery.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

@yield('content')

</body>
</html>