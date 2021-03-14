@extends('app')

@section('title', 'hello city')

@section('content')
<h1>Hello From Nancy</h1>

<p>Its currently {{date('h:i')}}</p>

@endsection
