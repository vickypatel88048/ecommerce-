@extends('layout')

@section('content')

<div class="auth-card">


<div class="text-center mb-4">
    <h2 class="card-title">Create Account 🚀</h2>
    <p class="text-muted">
        Join Vikky Store and start shopping today
    </p>
</div>

<form action="{{ route('register.post') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label fw-semibold">
            👤 Full Name
        </label>

        <input
            type="text"
            name="name"
            class="form-control"
            value="{{ old('name') }}"
            placeholder="Enter your full name"
            required
        >

        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label fw-semibold">
            📧 Email Address
        </label>

        <input
            type="email"
            name="email"
            class="form-control"
            value="{{ old('email') }}"
            placeholder="Enter your email"
            required
        >

        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label fw-semibold">
            🔒 Password
        </label>

        <input
            type="password"
            name="password"
            class="form-control"
            placeholder="Create password"
            required
        >

        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-4">
        <label class="form-label fw-semibold">
            🔐 Confirm Password
        </label>

        <input
            type="password"
            name="password_confirmation"
            class="form-control"
            placeholder="Confirm password"
            required
        >
    </div>

    <button type="submit" class="btn btn-primary">
        🚀 Create Account
    </button>

    <div class="text-center mt-4">
        Already have an account?
        <a href="{{ route('login') }}" class="fw-bold">
            Login
        </a>
    </div>

</form>


</div>

@endsection
