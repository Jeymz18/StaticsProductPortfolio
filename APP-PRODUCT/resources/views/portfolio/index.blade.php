@extends('layouts.portfolio')

@section('content')

<!-- Home Section -->
<section id="home" class="section text-center">
    <div class="container">
        <img src="{{ $portfolio['profile_image'] }}" alt="Profile" class="img-fluid rounded shadow mb-3" style="max-width:200px;">
        <h1 class="text-info fw-bold">{{ $portfolio['name'] }}</h1>
        <h4 class="text-warning">{{ $portfolio['title'] }}</h4>
        <p>{{ $portfolio['bio'] }}</p>
        <h5>Skills:</h5>
        @foreach ($portfolio['skills'] as $skill)
            <span class="badge bg-secondary">{{ $skill }}</span>
        @endforeach
    </div>
</section>

<hr class="bg-light">

<!-- About Section -->
<section id="about" class="section text-center">
    <h2 class="section-title">About Us</h2>
    <p>PC EXPRESS is your trusted shop for high-performance computers, gaming rigs, and IT solutions. Since 2000, we’ve been dedicated to providing quality service and reliable custom-built PCs.</p>
</section>

<hr class="bg-light">

<!-- Testimonials Section -->
<section id="testimonials" class="section text-center">
    <h2 class="section-title">Testimonials</h2>
    <p>"Best PC shop I’ve ever been to!" - Satisfied Customer</p>
    <p>"Reliable service and great builds." - Tech Enthusiast</p>
</section>

<hr class="bg-light">

<!-- Contact Section -->
<section id="contact" class="section text-center">
    <h2 class="section-title">Contact Us</h2>
    <p>Email: pcexpress@gmail.com</p>
    <p>Phone: +639074562134</p>
    <p>Location: PH, Manila</p>
</section>

@endsection
