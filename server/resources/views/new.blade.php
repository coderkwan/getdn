@extends('templetes/header')

@section('title', "Create task")

@section('content')
<div>
    <form action="/task" method="POST">
        @csrf
        <input type="text" name="task" placeholder="Type your new task" class="text-sm border-slate-800 border-2 rounded-md p-2">
        <button class="bg-slate-800 text-white px-4 py-2 text-sm rounded-md">Save Task</button>
    </form>
</div>
@endsection