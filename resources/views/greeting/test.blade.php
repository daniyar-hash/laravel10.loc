<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$site_title}}: {{$title}}</title>
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
</html>