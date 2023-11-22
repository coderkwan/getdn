@extends('templetes/header')

@section('title', "Login")

@section('content')
<div>
    <form action="/login" method="POST">
        @method("POST")
        @csrf
        <input type="email" name="email" placeholder="john@doe.com" class="text-sm border-slate-800 border-2 rounded-md p-2">
        <input type="password" name="password" placeholder="" class="text-sm border-slate-800 border-2 rounded-md p-2">
        <button class="bg-slate-800 text-white px-4 py-2 text-sm rounded-md">Login</button>
    </form>
    <a href="/register" class="text-xs text-blue-600">Don't have an account, Register</a>
</div>
@endsection