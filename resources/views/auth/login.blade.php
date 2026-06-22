@extends('layout')




@section('content')


<div class="auth-card">


<div class="text-center mb-4">
    <h2 class="card-title mb-2">Welcome Back 👋</h2>
    <p class="text-muted">
        Login to continue shopping
    </p>
</div>

<form action="{{ route('login.post') }}" method="POST">
    @csrf

    @if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
@endif
    @if(session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif

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
            <small class="text-danger">
                {{ $message }}
            </small>
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
            placeholder="Enter your password"
            required
        >

        @error('password')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div class="form-check">
            <input
                class="form-check-input"
                type="checkbox"
                name="remember"
                id="remember"
            >

            <label class="form-check-label" for="remember">
                Remember Me
            </label>
        </div>

        <a href="#" class="text-decoration-none">
            Forgot Password?
        </a>

    </div>

   <button type="submit" class="btn btn-primary">
    🔐 Login
</button>

    <div class="text-center mt-4">
        Don't have an account?
        <a href="{{ route('register') }}"
           class="fw-bold text-decoration-none">
            Register
        </a>
    </div>

</form>


</div>

@endsection
