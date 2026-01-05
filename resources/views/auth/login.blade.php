@extends('layouts.app')
@section('content')
<h2>Login</h2>
<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Email" class="form-control mb-2">
    <input type="password" name="password" placeholder="Password" class="form-control mb-2">
    <button class="btn btn-primary">Login</button>
    <p>Don't have account? <a href="{{ route('register') }}">Register</a></p>
</form>
@endsection
