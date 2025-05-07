@extends('layouts.app')

@section('content')
    <h2>Login</h2>
    <form action="{{ route('handle.login') }}" method="POST">
        @csrf
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
@endsection
