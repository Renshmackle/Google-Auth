@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Login</h2>
    <div class="text-center mt-4">
        <a href="{{ route('google.redirect') }}" class="btn btn-danger">
            Login with Google
        </a>
    </div>
</div>
@endsection
