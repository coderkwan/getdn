<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="p-8">
    @auth
        <nav class="border-b mb-4 flex gap-3 justify-between">
            <div>
                <a href="/" class="text-blue-900">Home</a>
                <a href="/create" class="text-blue-900">Create</a>
            </div>
            <form action="/logout" method="post">
                @method('post')
                @csrf
                <button>Logout</button>
            </form>
        </nav>

    @endauth
    @yield('content')
</body>

</html>
