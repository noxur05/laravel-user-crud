@extends('layouts.index')
@section('title')
    Home
@endsection

@section('content')
@auth
    <h1>Welcome {{auth()->user()->name}}</h1>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
@else
<form action="/register" method="POST">
    @csrf
    <x-text-input name="name" value="{{old('name')}}" id="name" placeholder="Name"/>
    <x-text-input name="email" type="email" value="{{old('email')}}" id="email" placeholder="Email"/>
    <x-text-input name="password" type="password" value="{{old('password')}}" id="password" placeholder="Password"/>
    <button type="submit">Submit</button>
</form>
@endauth
@endsection