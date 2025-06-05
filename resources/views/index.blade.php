@extends('layouts.app')

@section('content')
<style>
    /* Desktop and large screens */
    .carousel,
    .carousel-inner,
    .carousel-item {
        height: 100vh;
        margin-top: -24px;
        width: 100%;
        
    }

    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Overlay for better text readability */
    .carousel-item::before {
        content: "";
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0,0,0,0.4);
        z-index: 1;
    }

    /* Caption text styles */
    .carousel-caption {
        position: absolute;
        bottom: 25%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 2;
        text-align: center;
        width: 90%;
        max-width: 700px;
    }

    .carousel-caption h1 {
        font-size: 4vw;
        font-weight: 700;
        color: #fff;
        text-shadow: 2px 2px 6px rgba(0,0,0,0.9);
    }

    .carousel-caption p {
        font-size: 2vw;
        margin: 1rem 0 1.5rem;
        color: #eee;
        text-shadow: 1px 1px 4px rgba(0,0,0,0.8);
    }

    .btn-book {
        padding: 0.8rem 2.5rem;
        font-size: 1.2rem;
        background-color: #dc3545;
        border: none;
        border-radius: 0.3rem;
        box-shadow: 0 3px 6px rgba(0,0,0,0.3);
        transition: background-color 0.3s ease;
    }

    .btn-book:hover {
        background-color: #a71d2a;
    }

    /* Smaller screens adjustments */
    @media (max-width: 991px) {
    .carousel,
    .carousel-inner,
    .carousel-item {
        height: 50vh; /* reduce height */
        margin-top: -23px;
    }

    .carousel-item img {
        object-fit: cover; /* cover fills area */
        height: 100%;
        width: 100%;
    }

    .carousel-caption h1 {
        font-size: 6vw;
    }

    .carousel-caption p {
        font-size: 3.5vw;
    }

    .btn-book {
        font-size: 1rem;
        padding: 0.6rem 2rem;
    }
}


    @media (max-width: 576px) {
        .carousel-caption {
            bottom: 15%;
            max-width: 90%;
        }
    }
</style>

<div id="homepageCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner position-relative">
        <div class="carousel-item active position-relative">
            <img src="{{ asset('images/bg_1.jpg') }}" alt="Reliable Auto Repair" class="d-block w-100">
            <div class="carousel-caption">
                <h1>Reliable Auto Repair</h1>
                <p>Professional service for all makes and models</p>
                <a href="{{ url('/appointment') }}" class="btn btn-book text-white">Book Appointment</a>
            </div>
        </div>
        <div class="carousel-item position-relative">
            <img src="{{ asset('images/bg_2.jpg') }}" alt="Computerized Diagnostics" class="d-block w-100">
            <div class="carousel-caption">
                <h1>Advanced Diagnostics</h1>
                <p>Quick and accurate fault detection</p>
                <a href="{{ url('/appointment') }}" class="btn btn-book text-white">Book Appointment</a>
            </div>
        </div>
        <div class="carousel-item position-relative">
            <img src="{{ asset('images/bg_3.jpg') }}" alt="Maintenance Services" class="d-block w-100">
            <div class="carousel-caption">
                <h1>Oil Change & Maintenance</h1>
                <p>Keep your vehicle safe and reliable</p>
                <a href="{{ url('/appointment') }}" class="btn btn-book text-white">Book Appointment</a>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#homepageCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homepageCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-uppercase text-warning fw-bold">We Offer Services</h6>
            <h2 class="fw-bold">Our Car Services</h2>
        </div>
        <div class="row g-4">
            <!-- Service Item -->
            @php
    $services = [
        ['icon' => asset('images/icon1.png'), 'title' => 'Oil Change'],
        ['icon' => asset('images/icon2.png'), 'title' => 'Batteries'],
        ['icon' => asset('images/icon3.png'), 'title' => 'Tow Truck'],
        ['icon' => asset('images/icon4.png'), 'title' => 'Tire Change'],
        ['icon' => asset('images/icon5.png'), 'title' => 'Engine Repair'],
        ['icon' => asset('images/icon6.png'), 'title' => 'Car Maintenance'],
    ];
@endphp


@foreach ($services as $service)
    <div class="col-md-4 col-sm-6">
        <div class="d-flex align-items-start bg-white p-1 rounded shadow-sm h-100">
            <div class="me-3 flex-shrink-0">
                <img src="{{ $service['icon'] }}" alt="{{ $service['title'] }}"
                     class="img-fluid rounded-circle p-3"
                     style="width: 100px; height: 100px;">
            </div>
            <div>
                <h5 class="fw-bold mb-1">{{ $service['title'] }}</h5>
                <p class="text-muted mb-2">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <a href="#" class="text-decoration-underline text-dark fw-semibold small">Read More</a>
            </div>
        </div>
    </div>
@endforeach
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Image with Play Button -->
            <div class="col-md-6 mb-4 mb-md-0 position-relative">
            <img src="{{ asset('images/about.jpg') }}" alt="Technician"
     class="img-fluid rounded shadow"
     style="height: 450px; object-fit: cover; width: 100%;">


                <!-- <a href="#" class="position-absolute top-50 start-50 translate-middle bg-warning rounded-circle d-flex justify-content-center align-items-center"
                   style="width: 60px; height: 60px;">
                    <i class="bi bi-play-fill text-white fs-3"></i>
                </a> -->
            </div>

            <!-- Right Content -->
            <div class="col-md-6">
                <h6 class="text-uppercase text-warning fw-bold">Welcome to Autorepair</h6>
                <h2 class="fw-bold mb-4">We help more than 45 years serving customer car</h2>
                <p class="text-muted">
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                    there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                    Semantics, a large language ocean.
                </p>

                <!-- Tabs -->
                <ul class="nav nav-tabs border-0 my-4" id="serviceTabs" role="tablist">
                <li class="nav-item" role="presentation">
    <button class="nav-link active" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab">Our Mission</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab">Our Vision</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="value-tab" data-bs-toggle="tab" data-bs-target="#value" type="button" role="tab">Our Value</button>
  </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content bg-white p-3 rounded shadow-sm" id="serviceTabsContent">
                    <div class="tab-pane fade show active" id="mission" role="tabpanel">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="tab-pane fade" id="vision" role="tabpanel">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="tab-pane fade" id="value" role="tabpanel">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
