@extends('layout')

@section('content')

<div class="auth-card">


<div class="text-center mb-4">
    <h2 class="card-title">
        Admin Login 🔐
    </h2>
    <p class="text-muted">
        Admin Panel Access
    </p>
</div>

<form action="{{ route('admin.login.submit') }}" method="POST">
    @csrf

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="mb-3">
        <label class="form-label">
            Admin Email
        </label>

        <input
            type="email"
            name="email"
            class="form-control"
            placeholder="admin@gmail.com"
            required>
    </div>

    <div class="mb-3">
        <label class="form-label">
            Password
        </label>

        <input
            type="password"
            name="password"
            class="form-control"
            placeholder="Enter Password"
            required>
    </div>

    <button type="submit"
            class="btn btn-dark w-100">

        Login As Admin

    </button>

</form>


</div>

@endsection
