@extends('layouts.app')
@section('content')
<h2>{{ isset($todo) ? 'Edit' : 'Create' }} Task</h2>
<form action="{{ isset($todo) ? route('todos.update', $todo) : route('todos.store') }}" method="POST">
    @csrf
    @if(isset($todo)) @method('PUT') @endif
    <input type="text" name="title" placeholder="Title" class="form-control mb-2" value="{{ $todo->title ?? '' }}">
    <textarea name="description" placeholder="Description" class="form-control mb-2">{{ $todo->description ?? '' }}</textarea>
    @if(isset($todo))
    <select name="status" class="form-control mb-2">
        <option value="pending" {{ $todo->status=='pending'?'selected':'' }}>Pending</option>
        <option value="completed" {{ $todo->status=='completed'?'selected':'' }}>Completed</option>
    </select>
    @endif
    <button class="btn btn-primary">{{ isset($todo) ? 'Update' : 'Create' }}</button>
</form>
@endsection
