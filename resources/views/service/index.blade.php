@extends('layout')

@section('title', 'About Us page')

@section('content')
<h1>Welcome from services</h1>

<p>Pick your Spice!</p>

<form action="/service" method="post">
    <input type="text" name="name" autocomplete="off">
    
    @csrf

    <button>Add Service</button>
</form>
<p style="color: red;">@error('name') {{ $message }} @enderror</p>

<ul>
    @foreach($services as $service)
    <li>{{ $service->name}}</li>
    @endforeach
</ul>

@endsection