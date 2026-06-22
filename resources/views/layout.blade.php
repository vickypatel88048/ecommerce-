<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg,
                    #667eea,
                    #764ba2);
            min-height: 100vh;
        }

        .navbar {
            background: #fff !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            padding: 15px 0;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: 700;
            color: #667eea !important;
        }

        .nav-link {
            font-weight: 500;
            color: #333 !important;
            transition: .3s;
        }

        .nav-link:hover {
            color: #667eea !important;
        }

        .content-wrapper {
            min-height: calc(100vh - 80px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .auth-card {
            width: 100%;
            max-width: 500px;
            background: #fff;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .15);
        }

        .card-title {
            text-align: center;
            margin-bottom: 25px;
            font-weight: 700;
            color: #667eea;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #667eea;
        }

        .btn-primary {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: #667eea;
            font-weight: 600;
        }

        .btn-primary:hover {
            background: #5563d6;
        }

        .footer {
            text-align: center;
            color: #fff;
            padding: 15px;
        }

        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .product-img {
            height: 280px;
            width: 100%;
            object-fit: contain;
            background: #f8f9fa;
            padding: 15px;
        }

        .card-title {
            font-weight: 700;
        }

        .btn-primary {
            border-radius: 10px;
        }

        .card {
            border-radius: 20px;
        }

        .table {
            background: #fff;
        }

        .btn {
            border-radius: 10px;
            transition: .3s;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .table-primary {
            background: #0d6efd;
            color: white;
        }

        .alert {
            border-radius: 15px;
        }

        .product-img {
            height: 180px;
            /* pehle 280px tha */
            width: 100%;
            object-fit: contain;
            background: #f8f9fa;
            padding: 10px;
        }

        .card {
            border: none !important;
            border-radius: 18px;
            overflow: hidden;
            transition: all .3s ease;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .12);
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, .18);
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .card-text {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .btn-primary {
            padding: 10px;
            font-size: 14px;
        }

        .products-heading {
            color: #fff;
            font-size: 36px;
            font-weight: 700;
        }

        .form-control,
        .form-select {
            border-radius: 12px;
            padding: 12px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 10px rgba(102, 126, 234, .2);
        }

        .card {
            border-radius: 20px;
        }

        .card-header {
            border-radius: 20px 20px 0 0 !important;
        }

        .btn-success {
            border-radius: 12px;
            font-weight: 600;
        }

        .btn-success:hover {
            transform: translateY(-2px);
        }

        .table tbody tr:hover {
            background: #f8f9fa;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .card {
            border-radius: 20px;
        }

        .btn {
            border-radius: 10px;
        }

        .card-header {
            border-radius: 20px 20px 0 0 !important;
        }
    </style>
</head>

<body>

    
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Ecommerce </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">

                    @guest

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                Login
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                Register
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.login') }}">
                                Adminm
                            </a>
                        </li>
                    @else
                        <li class="nav-item me-3">
                            <span class="nav-link">
                                👋 {{ Auth::user()->name }}
                            </span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">
                                Logout
                            </a>

                        </li>

                        <a class="nav-link" href="{{ route('cart') }}">
                            Cart 🛒
                            <span class="badge bg-danger">
                                {{ count(session('cart', [])) }}
                            </span>
                        </a>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>

    <div class="content-wrapper">
        @yield('content')
    </div>

   
<div class="footer mt-2">
    © {{ date('Y') }} Vikky Store |
    Built with Laravel ❤️ by Vikky Kumar
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
