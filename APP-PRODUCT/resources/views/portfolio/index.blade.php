@extends('layouts.portfolio')

@section('content')

<!-- Home Section -->
<section id="home" class="py-5">
    <div class="row align-items-center">
        <div class="col-md-4 text-center">
            <img src="{{ $portfolio['profile_image'] }}" alt="Profile" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-8">
            <h1 class="text-info fw-bold">{{ $portfolio['name'] }}</h1>
            <h4 class="text-warning">{{ $portfolio['title'] }}</h4>
            <p>{{ $portfolio['bio'] }}</p>

            <h5 class="mt-3">Skills:</h5>
            @foreach ($portfolio['skills'] as $skill)
                <span class="badge bg-secondary me-1">{{ $skill }}</span>
            @endforeach
        </div>
    </div>
</section>

<hr class="bg-light">

<!-- About Section -->
<section id="about" class="py-5">
    <h2 class="text-center text-info">About</h2>
    <p class="text-center">This is the About section. You can describe your company, mission, or background here.</p>
</section>

<hr class="bg-light">

<!-- Testimonials Section -->
<section id="testimonials" class="py-5">
    <h2 class="text-center text-info">Testimonials</h2>
    <p class="text-center">"Best PC shop I’ve ever been to!" - Satisfied Customer</p>
    <p class="text-center">"Reliable service and great builds." - Tech Enthusiast</p>
</section>

<hr class="bg-light">

<!-- Contact Section -->
<section id="contact" class="py-5">
    <h2 class="text-center text-info">Contact</h2>
    <p class="text-center">Email: pcexpress@gmail.com</p>
    <p class="text-center">Phone: +639074562134</p>
    <p class="text-center">Location: PH, Manila</p>
</section>

@endsection
