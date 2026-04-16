<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"> -->
    {{--<title>{{$site_title}}: {{$title}}</title> --}}
    <title>@yield('title', 'Default title')</title>
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('main.css')}}"> --}}

     @vite(['resources/css/main.css', 'resources/bootstrap/bootstrap.css', 
                'resources/bootstrap/bootstrap.bundle.js'])
   

{{--@isset($desc)

<meta name="description" content="{{$desc}}">

@endif  --}}
@yield('desc')
</head>
<body>

@section('navbar')

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('greeting.index')}}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('greeting.index')}}">Home</a>
        </li>
           <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('greeting.test')}}">Test</a>
        </li>
           <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('greeting.contact')}}">Contact</a>
        </li>
      
      
      </ul>
   
    </div>
  </div>
</nav>

@show

<div class="img-2" style="width:300px; height:400px;"></div>
<!-- <img class="img-2" alt="Ocean" width="300" height="400"> -->
<div class="container mt-3">
     @yield('content')
</div>

@include('layouts.incs.footer',['test'=>'Test value from layout']);{{-- переопределяем переменную test --}}

  <!-- <script src="{{asset('bootstrap/bootstrap.bundle.js') }}"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>