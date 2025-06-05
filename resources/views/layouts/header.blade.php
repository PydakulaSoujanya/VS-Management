<!-- resources/views/partials/navbar.blade.php -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">MyApp</a>

<<<<<<< HEAD
</head>
<body>
 
    <div class="top-bar">
        <div class="logo">Autorepair<span>.</span></div>
        <div class="info-section">
            <div class="info-item">
                <i class="fas fa-location-arrow"></i> 721 New York NY 10016
            </div>
            <div class="info-item">
                <i class="fas fa-phone"></i> (+01) 123 456 7890
            </div>
        </div>
        <div class="social-icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-dribbble"></i>
        </div>
    </div>

    <div class="nav-bar">
        <div class="nav-links">
            <a href="#" class="active">HOME</a>
            <a href="#">ABOUT</a>
            <a href="#">SERVICES</a>
            <a href="#">PROJECT</a>
            <a href="#">BLOG</a>
            <a href="#">CONTACT</a>
        </div>
        <div class="search-box">
            <input type="text" placeholder="Search">
            <button><i class="fas fa-search"></i></button>
        </div>
    </div>


    
</body>
</html>


=======
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
        </li>
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="">Login</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   Logout
                </a>
                <form id="logout-form" action="" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
>>>>>>> 721d8f9db7d02c65d035b2ed3e4e5c0510d85dd2
