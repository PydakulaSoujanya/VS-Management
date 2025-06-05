

@include('layouts.header') {{-- Your existing header --}}

<div class="carousel">
    <div class="slides">
        <div class="slide active" style="background-image: url('/images/bg_1.jpg');"></div>
        <!-- <div class="slide" style="background-image: url('/images/bg_2.jpg');"></div>
        <div class="slide" style="background-image: url('/images/bg_3.jpg');"></div> -->
    </div>
    <!-- <div class="carousel-controls">
        <span class="prev">&#10094;</span>
        <span class="next">&#10095;</span>
    </div> -->

    <div class="appointment-banner">
    <div class="left-section">
        <i class="fas fa-tools"></i> Are you ready? <span>Let’s repair it now!</span>
    </div>
    <div class="right-section">
        <a href="#" class="book-now">Book an Appointment</a>
    </div>
</div>

</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

{{-- Carousel JavaScript --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const slides = document.querySelectorAll('.slide');
        const next = document.querySelector('.next');
        const prev = document.querySelector('.prev');
        let current = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
            });
            slides[index].classList.add('active');
            document.querySelector('.slides').style.transform = `translateX(-${index * 100}%)`;
        }

        next.addEventListener('click', () => {
            current = (current + 1) % slides.length;
            showSlide(current);
        });

        prev.addEventListener('click', () => {
            current = (current - 1 + slides.length) % slides.length;
            showSlide(current);
        });

        setInterval(() => {
            current = (current + 1) % slides.length;
            showSlide(current);
        }, 5000);
    });
</script>
