
@extends('layouts.main')

@section('content')

 <h1>Home Page</h1>

@endsection

{{-- @section('title', 'Test title from View') --}}
@section('title', $title ?? 'Test title ccc')

@section('desc')
<meta name="description" content="Description from View">

@endsection

