@extends('templetes/header')

@section('title', 'View task')

@section('content')
    <div>
        @if ($data)
                <h1>{{ $data->task }}</h1>
        @else
            <h3>The task you're looking for does not exist</h3>
        @endif
    </div>
@endsection
