@extends('templetes/header')

@section('title', 'Edit task')

@section('content')
    <div>
        @if ($data)
            <form action="/task/{{ $data->id }}" method="POST" class="flex flex-col gap-3 max-w-md">
                @method('PUT')
                @csrf
                <input type="text" name="task" value="{{ $data->task }}" placeholder="Type your new task"
                    class="text-sm border-slate-800 border-2 rounded-md p-2">
                <div>
                    <label for="complete">Complete</label>
                    @if ($data->completed)
                        <input type="checkbox" name="complete" value="1" checked>
                    @else
                        <input type="checkbox" name="complete" value="1">
                    @endif
                </div>
                <button class="bg-slate-800 text-white px-4 py-2 text-sm rounded-md">Update Task</button>
            </form>
        @else
            <h3>The task you're looking for does not exist</h3>
        @endif
    </div>
@endsection
