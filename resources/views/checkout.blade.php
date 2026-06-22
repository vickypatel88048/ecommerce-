@extends('layout')

@section('content')

<div class="container py-5">

```
<div class="row justify-content-center">

    <div class="col-lg-7">

        <div class="card border-0 shadow-lg">

            <div class="card-header bg-primary text-white text-center py-3">
                <h2 class="mb-0">
                    🛍 Checkout
                </h2>
            </div>

            <div class="card-body p-4">

                <form>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            👤 Full Name
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Enter your full name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            📧 Email Address
                        </label>

                        <input
                            type="email"
                            class="form-control"
                            placeholder="Enter your email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            📱 Mobile Number
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Enter mobile number">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            📍 Delivery Address
                        </label>

                        <textarea
                            class="form-control"
                            rows="3"
                            placeholder="Enter delivery address"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            💳 Payment Method
                        </label>

                        <select class="form-select">
                            <option>Cash On Delivery</option>
                            <option>UPI</option>
                            <option>Credit Card</option>
                            <option>Debit Card</option>
                        </select>
                    </div>

                    <div class="alert alert-info">
                        🚚 Free Delivery Available
                    </div>

                    <button
                        type="submit"
                        class="btn btn-success btn-lg w-100">

                        Place Order 🚀

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>
```

</div>

@endsection
