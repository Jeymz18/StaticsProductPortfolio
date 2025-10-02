@extends('layouts.portfolio')

@section('content')

<!-- Home Section -->
<section id="home" class="section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left side (Logo) -->
            <div class="col-md-6 text-center text-md-start">
                <img src="{{ $portfolio['profile_image'] }}" 
                     alt="Profile" 
                     class="img-fluid rounded shadow" 
                     style="max-width:250px;">
            </div>

            <!-- Right side (Text) -->
            <div class="col-md-6 text-center text-md-start">
                <h1 class="text-info fw-bold">{{ $portfolio['name'] }}</h1>
                <h4 class="text-warning">{{ $portfolio['title'] }}</h4>
                <p>{{ $portfolio['bio'] }}</p>
            </div>
        </div>
    </div>
</section>

<hr class="bg-light">

<!-- About Section with Products -->
<section id="about" class="section text-center">
    <div class="container">
        <h2 class="section-title mb-4">Our Products</h2>
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100">
                    <img src="https://m.media-amazon.com/images/I/91f3Hg6a5lS._AC_SL1500_.jpg" class="card-img-top" alt="Gaming PC">
                    <div class="card-body text-start">
                        <h5 class="card-title">Gaming PC</h5>
                        <ul class="list-unstyled mb-0">
                            <li>CPU: Intel i9</li>
                            <li>RAM: 32GB</li>
                            <li>GPU: NVIDIA RTX 4080</li>
                            <li>Storage: 1TB SSD</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100">
                    <img src="https://mikepc.com.au/cdn/shop/collections/a_a84506fa-003c-45f8-92f5-6f095910e68b_960x.jpg?v=1734685809" class="card-img-top" alt="Budget Built">
                    <div class="card-body text-start">
                        <h5 class="card-title">Budget Built</h5>
                        <ul class="list-unstyled mb-0">
                            <li>CPU: Intel i5</li>
                            <li>RAM: 16GB</li>
                            <li>GPU: NVIDIA GTX 1660</li>
                            <li>Storage: 512GB SSD</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100">
                    <img src="https://i.ytimg.com/vi/J1OPuu7hZdQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBwRJWM9FDwm1yJ-rfAhAMNFVzVTg" class="card-img-top" alt="Accessories">
                    <div class="card-body text-start">
                        <h5 class="card-title">Accessories</h5>
                        <ul class="list-unstyled mb-0">
                            <li>Mechanical Keyboard</li>
                            <li>Gaming Mouse</li>
                            <li>Headset</li>
                            <li>Mouse Pad</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="bg-light">

<!-- Testimonials Section -->
<section id="testimonials" class="section">
    <div class="container">
        <h2 class="section-title text-center mb-5">Testimonials</h2>
        <div class="row">
            <!-- Testimonial 1 -->
            <div class="col-md-4 mb-3">
                <div class="card shadow h-100">
                    <div class="card-body text-center">
                        <!-- Picture -->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0APfjAjzhQOZs-u2BWWDX4lSGDEahO3ZBRA&s" 
                             alt="Carlo Reyes" 
                             class="rounded-circle mb-3" 
                             style="width:80px; height:80px; object-fit:cover;">
                        <!-- Text -->
                        <p>"Laging on-time ang shipments at maayos ang packaging. Salamat, PC Express!"</p>
                        <h6>Carlo Reyes, Office Worker</h6>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-md-4 mb-3">
                <div class="card shadow h-100">
                    <div class="card-body text-center">
                        <!-- Picture -->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQBXl51EpQakF5mAAFml8mnNCHizn0cDoWbA&s" 
                             alt="Maria Santos" 
                             class="rounded-circle mb-3" 
                             style="width:80px; height:80px; object-fit:cover;">
                        <!-- Text -->
                        <p>"Reliable service and great builds. Highly recommended!"</p>
                        <h6>Maria Santos, Student</h6>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-md-4 mb-3">
                <div class="card shadow h-100">
                    <div class="card-body text-center">
                        <!-- Picture -->
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b6/Pacquiao_and_Didal_%28cropped%29.jpg" 
                             alt="Juan Dela Cruz" 
                             class="rounded-circle mb-3" 
                             style="width:80px; height:80px; object-fit:cover;">
                        <!-- Text -->
                        <p>"Excellent customer support and fast delivery. Love it!"</p>
                        <h6>Juan Dela Cruz, Gamer</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="bg-light">

<!-- Contact Section -->
<section id="contact" class="section text-center">
    <div class="container">
        <h2 class="section-title">Contact Us</h2>
        <p>Email: pcexpress@gmail.com</p>
        <p>Phone: +639074562134</p>
        <p>Location: PH, Manila</p>
    </div>
</section>

@endsection
