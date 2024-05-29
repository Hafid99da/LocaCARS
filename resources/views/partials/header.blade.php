
  <!-- Navbar Section -->
<nav class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-2 mx-5">
      <div class="d-flex align-items-center col-md-3 mb-2 mb-md-0">
        <a class="navbar-brand logo" href="" ><span class="fw-bolder text-primary">LocaCars</span></a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0"> 
        <li><a class="nav-link px-2 link-secondary" href="{{ route('home') }}">Home</a></li>
        <li><a class="nav-link px-2 link-secondary" href="{{ route('cars.list') }}">Book Cars</a></li>
      </ul>

      <div class="col-md-3 text-end">
      @guest
        <a class="btn btn-outline-primary me-2" href="{{ route('login.index') }}">Log In</a>
        <a class="btn btn-outline-primary me-2" href="{{ route('signup') }}">Sign Up</a>
      @endguest
      @auth
      @if(Auth::user()->role ==='admin')
        <a class="btn btn-outline-warning me-2" href="{{ route('dashboard') }}">Dashboard</a>
      @else
        <a class="btn btn-outline-warning me-2" href="">Profile</a>
      @endif
        <a class="btn btn-outline-primary me-2" href="{{ route('login.logout') }}">Log out</a>
      @endauth
      </div>
</nav>
<div class="container-fluid">

