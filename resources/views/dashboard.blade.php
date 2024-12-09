@extends('layouts.app')

@section('content')
<div class="container mt-5">
    @if(session('user'))
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card border-0 rounded-5 shadow-lg overflow-hidden">
                    <!-- Card Header with gradient background -->
                    <div class="card-header bg-gradient text-black text-center py-5">
                        <h3 class="display-4">Hello, {{ session('user')->name }}!</h3>
                        <p class="lead">Welcome to your profile</p>
                    </div>

                    <!-- Card Body with elegant content layout -->
                    <div class="card-body text-center">
                        <div class="avatar-container mb-4">
                            <!-- Avatar with subtle border shadow -->
                            <img src="{{ session('user')->avatar }}" alt="Avatar" class="img-fluid rounded-circle shadow-sm" width="160">
                        </div>
                        <h4 class="fw-bold text-dark mb-3">{{ session('user')->name }}</h4>
                        <p class="text-muted mb-2"><strong>Email:</strong> {{ session('user')->email }}</p>
                        <p class="text-muted mb-3"><strong>Google ID:</strong> {{ session('user')->id }}</p>

                        <!-- Button group for additional actions -->
                        <div class="d-flex justify-content-center mt-4">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger px-5 py-3 rounded-pill shadow-sm border-0 transition-all">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-info text-center shadow-lg rounded-4">
            <p>No user data available. Please log in to access your profile.</p>
            <a href="{{ route('google.redirect') }}" class="btn btn-success btn-lg rounded-pill">Login with Google</a>
        </div>
    @endif
</div>

<!-- Additional custom CSS for more finesse -->
@section('styles')
<style>
    /* Card Header Gradient */
    .bg-gradient {
        background: linear-gradient(90deg, #1e3c72, #2a5298);
    }

    /* Avatar Border Shadow */
    .avatar-container img {
        border: 4px solid white;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .avatar-container img:hover {
        transform: scale(1.1);
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
    }

    /* Button Hover Effects */
    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
    }

    /* Transition for smooth interactions */
    .transition-all {
        transition: all 0.3s ease;
    }

    /* Custom Shadow */
    .shadow-lg {
        box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.1);
    }

    /* Alerts with shadow */
    .alert-info {
        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
    }

    /* Text Muted */
    .text-muted {
        color: #6c757d !important;
    }

    /* Improved Button Styling */
    .btn-outline-primary {
        border-color: #007bff;
        color: #007bff;
    }

    .btn-outline-primary:hover {
        background-color: #007bff;
        color: white;
    }
</style>
@endsection
@endsection
