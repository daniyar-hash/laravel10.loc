
@extends('layouts.main')

@section('content')

 <h1>Home Page</h1>

 <!-- @isset($users)

 @foreach($users as $user)
    {{$user['name']}} <br>
 @endforeach

 @endisset -->

 <!-- @if(!empty($users))

 @foreach($users as $user)
    {{$user['email']}} <br>
 @endforeach

 @endif -->
<!-- 
 @for($i=1; $i<=12; $i++)

 @if($i==2)
  @continue
 @endif

 
 {{$i}} <br>

 @if($i==9)
 @break
 @endif
 @endfor -->

 <!-- @foreach($users as $user)
   {{$loop->iteration}}: {{$user['email']}} <br>
 @endforeach -->

<!-- @php


 $users2 = [];
@endphp

@forelse($users2 as $user)

{{$user['name']}} <br>

@empty
<p>No users!</p> -->

<!-- @endforelse -->



@foreach($users as $user)


<span @class(['text-danger'=>$loop->odd])>{{$loop->iteration}}.{{$user['name']}}</span><br>


@endforeach








@endsection

{{-- @section('title', 'Test title from View') --}}
@section('title', $title ?? 'Test title ccc')

@section('desc')
<meta name="description" content="Description from View">

@endsection

