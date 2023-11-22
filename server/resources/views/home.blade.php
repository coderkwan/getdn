@extends('templetes/header')

@section('title', 'Home page')

@section('content')
    <div class="max-w-md">
        @if (count($data) > 0)
            @foreach ($data as $d)
                <div class="p-3 m-3 border rounded-lg flex justify-between items-center gap-3">
                    <a href="/task/{{ $d->id }}">{{ $d->task }} </a>
                    <div class="flex items-center gap-3">
                        @if($d->completed)
                        <p class="text-xs text-green-500">Completed</p>
                        @else
                        <p class="text-xs">Not Completed</p>
                        @endif
                        <a href="/edit/{{ $d->id }}" class="bg-gray-400 p-2 text-sm">Edit</a>
                        <form action="/task/{{ $d->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="bg-red-400 p-2 text-sm">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @else
            <h3 class="text-orange-500 font-normal text-sm">No tasks to show</h3>
        @endif
    </div>
@endsection
