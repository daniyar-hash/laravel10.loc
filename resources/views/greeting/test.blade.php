@extends('layouts.main')

@section('content')

 <h1>Test Page</h1>

@endsection

@section('title', $title ?? 'Test title ccc')

@section('desc')
<meta name="description" content="Description from View">

@endsection

@section('navbar')
@parent
<div class="block">
    Add some block
</div>

@endsection













{{--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>{{$site_title}}: {{$title}}</title> -->
     <title>{{$title}}</title>
</head>
<body>

    <h1>{{$title}}</h1>
 
    <nav>
          {!! $menu !!}
    </nav>


    <p>Name:{{$name}}</p>
    <p>Age:{{$age}}</p>


    <p>Today:{{$year}} year</p>
    <p>Test1: {{$test1}}</p>
    <p>Test2: {{$test2}}</p> 

</body>
</html> --}}