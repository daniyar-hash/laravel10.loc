
@extends('layouts.main')

@section('content')

 <h1>Home Page</h1>

 @php
 /**
 *  @var \Illuminate\Support\Collection $products
   @var \App\Models\Post $post
 */

 @endphp
{{--
@foreach($products->chunk(3) as $chunk)
 <div class="row my-3">
   @foreach($chunk as $product)
 <div class="col-md-4">
      {{$product['title']}}
 </div>
@endforeach
 </div>
@endforeach

--}}


 @foreach($post1 as $post)
 
      {{$post->title}} | {{$post->isPublished()}} <br>

@endforeach
<hr>
 @foreach($post2 as $post)
 
      {{$post->title}} | {{$post->status ? 'published' : 'Not published'}} <br>

@endforeach
<hr>
 @foreach($post3 as $post)
 
   {{$post->title}} | {{$post->status ? 'published' : 'Not published'}} <br>


@endforeach
<hr>



 {{-- @isset($users)

 @foreach($users as $user)
    {{$user['name']}} <br>
 @endforeach

 @endisset

 @if(!empty($users))

 @foreach($users as $user)
    {{$user['email']}} <br>
 @endforeach

 @endif 

 @for($i=1; $i<=12; $i++)

 @if($i==2)
  @continue
 @endif

 
 {{$i}} <br>

 @if($i==9)
 @break
 @endif
 @endfor 

 @foreach($users as $user)
   {{$loop->iteration}}: {{$user['email']}} <br>
 @endforeach 

 @php


 $users2 = [];
@endphp

@forelse($users2 as $user)

{{$user['name']}} <br>

@empty
<p>No users!</p> 

 @endforelse 




@foreach($users as $user)


 <span @class(['text-danger'=>$loop->odd])>{{$user->id}}.{{$user->name}} - {{$user->email}}</span><br>


@endforeach 



--}}
@endsection

{{-- @section('title', 'Test title from View') --}}
@section('title', $title ?? 'Test title')

@section('desc')
<meta name="description" content="Description from View">

@endsection

