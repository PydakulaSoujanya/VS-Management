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
@endsection
