<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">

    <style>
        body {
            font-family: Arial, sans-serif !important;
            background-color: #111 !important;
            color: #f1f1f1 !important;
        }

        .navbar {
            background-color: #000 !important;
        }

        .navbar a {
            color: #fff !important;
        }

        .navbar-toggler {
            border-color: #fff !important;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23ffffff' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .section {
            padding: 60px 0 !important;
        }

        .section-title {
            margin-bottom: 30px !important;
            font-weight: bold !important;
            color: #00e6e6 !important;
        }

        .card {
            background-color: #1c1c1c !important;
            color: #fff !important;
        }

        footer {
            background: #000 !important;
            color: #aaa !important;
            padding: 15px !important;
            text-align: center !important;
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="{{ route('portfolio.home') }}">PC EXPRESS</a>

            {{-- Toggle button for mobile --}}
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('portfolio.home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('portfolio.about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('portfolio.testimonials') }}">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('portfolio.contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer>
        <p>© {{ date('Y') }} PC EXPRESS. All Rights Reserved.</p>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
