@extends('templetes/header')

@section('title', "Register")

@section('content')
<div>
    <form action="/newuser" method="POST">
        @method('POST')
        @csrf
        <input type="text" name="name" placeholder="John Doe" class="text-sm border-slate-800 border-2 rounded-md p-2">
        <input type="email" name="email" placeholder="john@doe.com" class="text-sm border-slate-800 border-2 rounded-md p-2">
        <input type="password" name="password" placeholder="" class="text-sm border-slate-800 border-2 rounded-md p-2">
        <button class="bg-slate-800 text-white px-4 py-2 text-sm rounded-md">Register</button>
    </form>
    <a href="/login" class="text-xs text-blue-600">Already have an account, Login</a>
</div>
@endsection