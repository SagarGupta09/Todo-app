@extends('layouts.app')
@section('content')
<h2>Todos</h2>
<a href="{{ route('todos.create') }}" class="btn btn-success mb-2">Add Todo</a>
<div class="row">
@foreach($todos as $todo)
<div class="col-md-4 mb-3">
    <div class="card p-2">
        <h5>{{ $todo->title }}</h5>
        <p>{{ $todo->description }}</p>
        <p>Status: {{ $todo->status }}</p>
        @if(Auth::user()->role==='admin')
            <p>User: {{ $todo->user->name }}</p>
        @endif
        <a href="{{ route('todos.edit', $todo) }}" class="btn btn-sm btn-primary">Edit</a>
        <form action="{{ route('todos.destroy', $todo) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger">Delete</button>
        </form>
    </div>
</div>
@endforeach
</div>
@endsection
