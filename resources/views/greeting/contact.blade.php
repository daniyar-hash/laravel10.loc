@extends('layouts.main')

@section('content')

 <h1>Contact Page</h1>

@endsection

@section('title', $title ?? 'Test title ccc')

@section('desc')
<meta name="description" content="Description from View">

@endsection



{{--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>


    <h1>{{ $title }}</h1> 

    <!-- <h3>{!! $title !!}---</h3>//  вывод данных без экранирования
    <p><?=  htmlspecialchars($title); ?></p>
{{ mb_strlen('Hello world!!!', 'UTF-8')}}
<p>&copy {{ date('Y')}}</p> -->
 
  <!-- @{{ name }} -->
    <script>
   
     let data1 = {!! json_encode($data) !!};
     let data2 = <?= json_encode($data) ?>;
     let data3 = {{ \Illuminate\Support\Js::from($data) }};
     let data4 = {{ Js::from($data) }};

     console.log(data1);
     console.log(data2);
     console.log(data3);
     console.log(data4.name);
    </script>
</body>
</html>

--}}