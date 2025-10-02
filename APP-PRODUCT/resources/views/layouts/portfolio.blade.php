<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PC EXPRESS')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
        <style>
        body {
            background-color: #121212;
            color: #ffffff;
        }
        .navbar {
            background-color: #1f1f1f;
        }
        .navbar a {
            color: #ffffff !important;
        }
        .section {
            padding: 60px 0;
        }
        .section-title {
            font-weight: bold;
            margin-bottom: 30px;
        }
        footer {
            background-color: #1f1f1f;
            color: #bbb;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#home">PC EXPRESS</a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="mt-5 pt-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center mt-5 py-3 bg-dark text-light">
        © {{ date('Y') }} PC EXPRESS. All Rights Reserved.
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Smooth Scroll --}}
    <script>
    document.querySelectorAll('a.nav-link, .navbar-brand').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            if(this.hash) {
                e.preventDefault();
                document.querySelector(this.hash).scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
    </script>

</body>
</html>
