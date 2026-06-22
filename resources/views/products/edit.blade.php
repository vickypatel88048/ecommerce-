@extends('layout')

@section('content')

<div class="container py-5">

```
<div class="card p-4 shadow">

    <h2 class="mb-4 text-center">
        ✏️ Edit Product
    </h2>

    <form action="{{ route('products.update',$product->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Product Name</label>

            <input type="text"
                   name="name"
                   value="{{ $product->name }}"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Current Image</label>

            <br>

            <img src="{{ asset('products/'.$product->image) }}"
                 width="120"
                 height="120"
                 class="rounded shadow mb-3"
                 style="object-fit:cover;">
        </div>

        <div class="mb-3">
            <label class="form-label">
                Change Product Image
            </label>

            <input type="file"
                   name="image"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>

            <input type="number"
                   name="price"
                   value="{{ $product->price }}"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>

            <textarea name="description"
                      class="form-control"
                      rows="4"
                      required>{{ $product->description }}</textarea>
        </div>

        <button type="submit"
                class="btn btn-success w-100">
            Update Product
        </button>

    </form>

</div>
```

</div>

@endsection
