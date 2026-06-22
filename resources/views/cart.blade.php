@extends('layout')

@section('content')

<div class="container py-5">


<div class="card shadow-lg border-0 rounded-4 p-4">

    <h2 class="text-center fw-bold text-primary mb-4">
        🛒 Shopping Cart
    </h2>

    @if(count(session('cart', [])) > 0)

    <div class="table-responsive">

        <table class="table table-hover align-middle text-center">

            <thead class="table-primary">
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

            @php $grandTotal = 0; @endphp

            @foreach(session('cart', []) as $id => $item)

            @php
                $total = $item['price'] * $item['quantity'];
                $grandTotal += $total;
            @endphp

            <tr>

               <td>


@if(isset($item['image']))
    <img src="{{ asset('products/'.$item['image']) }}"
         width="70"
         height="70"
         class="rounded shadow-sm mb-2"
         style="object-fit:cover;">
    <br>
@endif

<span class="fw-bold">
    {{ $item['name'] }}
</span>


</td>

                <td>
                    ₹{{ number_format($item['price']) }}
                </td>

                <td>

                    <a href="{{ route('cart.decrease',$id) }}"
                       class="btn btn-danger btn-sm rounded-circle">
                        -
                    </a>

                    <span class="mx-3 fw-bold fs-5">
                        {{ $item['quantity'] }}
                    </span>

                    <a href="{{ route('cart.increase',$id) }}"
                       class="btn btn-success btn-sm rounded-circle">
                        +
                    </a>

                </td>

                <td class="fw-bold text-success">
                    ₹{{ number_format($total) }}
                </td>

                <td>

                    <a href="{{ route('cart.remove',$id) }}"
                       class="btn btn-outline-danger">
                        🗑 Remove
                    </a>

                </td>

            </tr>

            @endforeach

            </tbody>

        </table>

    </div>

    <div class="row mt-4">

        <div class="col-md-6">
            <div class="alert alert-info">
                <strong>Total Items:</strong>
                {{ count(session('cart')) }}
            </div>
        </div>

        <div class="col-md-6 text-end">

            <div class="alert alert-success">

                <h4 class="mb-0">
                    Grand Total:
                    ₹{{ number_format($grandTotal) }}
                </h4>

            </div>

            <a href="{{ route('checkout') }}"
               class="btn btn-success btn-lg px-5">

                Proceed To Checkout

            </a>

        </div>

    </div>

    @else

    <div class="text-center py-5">

        <h3 class="text-muted">
            🛒 Your Cart Is Empty
        </h3>

        <a href="{{ url('/dashboard') }}"
           class="btn btn-primary mt-3">

            Continue Shopping

        </a>

    </div>

    @endif

</div>


</div>

@endsection
