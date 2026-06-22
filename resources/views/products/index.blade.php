@extends('layout')

@section('content')

<div class="container mt-5">


<div class="card shadow-lg border-0">

    <div class="card-header bg-primary text-white d-flex justify-content-between">

        <h3 class="mb-0">
            Product Management
        </h3>

        <a href="{{ route('products.create') }}"
           class="btn btn-light">

            + Add Product

        </a>

    </div>

    <div class="card-body">

        <table class="table table-striped table-hover">

            <thead class="table-dark">

                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>

            </thead>

            <tbody>

            @foreach($products as $product)

                <tr>

                    <td>{{ $product->id }}</td>

                    <td>
                       <img src="{{ asset('products/'.$product->image) }}"
                             width="60"
                             class="rounded">
                             <span class="fw-bold">
    {{ $product['name'] }}
</span>
                    </td>

                    <td>{{ $product->name }}</td>

                    <td>₹{{ number_format($product->price) }}</td>

                    <td>

                        <a href="{{ route('products.edit',$product->id) }}"
                           class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <form action="{{ route('products.destroy',$product->id) }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</div>


</div>

@endsection
