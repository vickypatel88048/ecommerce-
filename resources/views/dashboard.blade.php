@extends('layout')

@section('content')
    <div class="container py-5">


        <h2 class="text-center mb-5 text-white">Our Products</h2>
        <div class="row g-4">

@foreach($products as $product)

    <div class="col-lg-4 col-md-6">

        <div class="card h-100 shadow">

            <img src="{{ asset('products/'.$product->image) }}"
    
     class="rounded">
            <div class="card-body text-center d-flex flex-column">

                <div class="d-flex justify-content-between align-items-center">

                    <h5 class="card-title mb-0">
                        {{ $product->name }}
                    </h5>

                    <span class="fs-5 text-danger">
                        ♥
                    </span>

                </div>

                <div class="mb-2">

                    <span class="text-warning">
                        ★★★★★
                    </span>

                    <small class="text-muted">
                        (4.8)
                    </small>

                </div>

                <p class="card-text flex-grow-1">
                    {{ $product->description }}
                </p>

                <h5 class="text-success fw-bold mb-3">
                    ₹{{ number_format($product->price) }}
                </h5>

                <a href="{{ route('add.to.cart', $product->id) }}"
                   class="btn btn-primary">

                    Add To Cart

                </a>

            </div>

        </div>

    </div>

    @endforeach
            

            

            

        </div>


    </div>
@endsection
