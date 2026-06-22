@extends('layout')

@section('content')

<div class="container py-5">


<div class="card shadow-lg p-4">

    <h2 class="text-center mb-4">
        ➕ Add Product
    </h2>

   <form action="{{ route('products.store') }}"
      method="POST"
      enctype="multipart/form-data">
      
        @csrf

        <div class="mb-3">
            <label>Product Name</label>
            <input type="text"
                   name="name"
                   class="form-control">
        </div>

        <div class="mb-3">
    <label>Product Image</label>

    <input type="file"
           name="image"
           class="form-control">
</div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number"
                   name="price"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea
                name="description"
                class="form-control"
                rows="4"></textarea>
        </div>

        <button class="btn btn-success w-100">
            Save Product
        </button>

    </form>

</div>


</div>

@endsection
