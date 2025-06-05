<!-- resources/views/partials/navbar.blade.php -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">Vehicle Management</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto fs-5">
      <li class="nav-item mx-3">
      <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item mx-3">
        <a class="nav-link" href="{{ url('/about') }}">About</a>
        </li>
        <li class="nav-item mx-3">
        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
        </li>
        <!-- Authentication Links -->
        @guest
        <li class="nav-item mx-3">
        <a class="nav-link" href="">Login</a>
            </li>
        @else
        <li class="nav-item mx-3">
        <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item mx-3">
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
