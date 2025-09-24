@extends('layouts.portfolio')

@section('title', 'Contact - PC EXPRESS')

@section('content')
<section class="section">
    <div class="container text-center">
        <h2 class="section-title">Contact Us</h2>
        <p>You can reach us for inquiries, support, or custom builds.</p>

        <ul class="list-unstyled mt-3">
            <li><strong>Email:</strong> pcexpress@gmail.com</li>
            <li><strong>Phone:</strong> +639074562134</li>
            <li><strong>Location:</strong> PH, Manila</li>
        </ul>

        <form class="mt-4" style="max-width: 500px; margin: 0 auto;">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Your Email">
            </div>
            <div class="mb-3">
                <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Send Message</button>
        </form>
    </div>
</section>
@endsection
