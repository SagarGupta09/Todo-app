<!DOCTYPE html>
<html>
<head>
    <title>Laravel Todo App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
    <a class="navbar-brand" href="{{ route('todos.index') }}">TodoApp</a>
    <div class="ms-auto">
        @auth
            <span>{{ auth()->user()->name }} ({{ auth()->user()->role }})</span>
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-sm btn-danger">Logout</button>
            </form>
        @endauth
    </div>
</nav>
<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
