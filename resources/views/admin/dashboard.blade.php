@extends('layout')

@section('content')

<div class="container py-5">


<div class="card shadow-lg border-0 p-5">

    <h1 class="text-center text-primary">
        🔐 Admin Dashboard
    </h1>

    <p class="text-center text-muted">
        Welcome Admin
    </p>

    <hr>



    <div class="row text-center">
        <div class="col-md-6 mb-3">
        <a href="{{ route('products.index') }}"
   class="btn btn-primary">
   Manage Products
</a>
</div>

        

        <div class="col-md-6 mb-3">

           <a href="{{ route('admin.logout') }}"
   class="btn btn-danger">
   Logout
</a>

        </div>

    </div>

</div>


</div>

@endsection
