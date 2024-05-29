@extends('layouts.layout')
@section('content')
  <!-- Header Section -->
  <section class="hero container d-flex align-items-center ps-1">
      <div class="text-center text-md-start px-5">
        <h1 class="display-4">Rent <span class="text-warning">a car</span> and find great deals with us</h1>
        <p class="lead">Choose from a collection of brand new cars, low prices are part of our every day offer.</p>
        <button class="btn btn-warning btn-lg text-white">Book online now!</button>
      </div>
      <div class="side-hero col-12 col-md-6 d-flex justify-content-center align-items-center" style="background-color: #007bff;">
        <img src="{{ asset('images/bv-re.png') }}" alt="Car" class="img-fluid" />
      </div>
    </section>

  <!-- Featured Vehicles Section -->
  <section class="featured-vehicles container py-2 d-flex justify-content-center align-items-center mt-5">
    <div class="text-center">
      <h1 class="mb-4">Featured <span class="text-warning">Vehicles</span></h1>
      <h4 class="mb-5">We have been working with clients around the world.</h4>
      <div class="row">
        <div class="col-md-4 mb-1">
          <div class="card">
            <img src="{{ asset('images/car5.jpg') }}" class="card-img-top" alt="Dacia Dokker">
            <div class="card-body">
              <h4 class="card-title">Dacia Dokker</h4>
              <p class="card-text">2016</p>
              <a class="btn btn-primary" href=" {{ route('cars.index') }} ">Rent now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-1">
          <div class="card ">
            <img src="{{ asset('images/car2.jpg') }}" class="card-img-top" alt="Dacia Duster">
            <div class="card-body">
              <h4 class="card-title">Dacia Duster</h4>
              <p class="card-text">2021</p>
              <a class="btn btn-primary" href=" {{ route('cars.index') }} ">Rent now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-1">
          <div class="card">
            <img src="{{ asset('images/car3.jpg') }}" class="card-img-top" alt="Renault Clio">
            <div class="card-body">
              <h4 class="card-title">Renault Clio</h4>
              <p class="card-text">2019</p>
              <a class="btn btn-primary" href=" {{ route('cars.index') }} ">Rent now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us Section -->
  <div class="why-choose-us">
        <h2>Why <span class="text-warning">choose</span> Us</h2>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="icon-box">
                    <i class="fas fa-car"></i>
                    <h4>Wide Selection of Cars</h4>
                    <p>We offer a diverse range of cars to suit your needs and preferences. Whether you're looking for a compact car for city driving or a spacious SUV for a family trip, we have a wide selection of vehicles to choose from.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box">
                    <i class="fas fa-dollar-sign"></i>
                    <h4>Competitive Prices</h4>
                    <p>We provide competitive prices that fit your budget. Our transparent pricing ensures that you get the best value for your money without compromising on quality or service.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box">
                    <i class="fas fa-calendar-alt"></i>
                    <h4>Easy Booking Process</h4>
                    <p>Our user-friendly online booking system makes it quick and convenient to reserve your desired car. With just a few clicks, you can easily select your pickup location, choose your preferred car, and book it for your desired dates.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box">
                    <i class="fas fa-shield-alt"></i>
                    <h4>Trust and Reliability</h4>
                    <p>With years of experience in the car rental industry, we have established a reputation for trust and reliability. You can rely on us to provide quality vehicles, excellent service, and a seamless rental experience.</p>
                </div>
            </div>
        </div>
    </div>


  <!-- Testimonials Section -->
  <div class="container testimonials">
        <h2>What <span class="text-warning">Our Clients</span> Say</h2>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="testimonial">
                    <img src="https://via.placeholder.com/80" alt="Client Photo">
                    <h4>Efficient Collaborating</h4>
                    <p>Outstanding car rental experience. Impressive teamwork and coordination. Effortless process, highly recommended.</p>
                    <p><strong>Ann Black</strong><br>CEO at ABC Corporation</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <img src="https://via.placeholder.com/80" alt="Client Photo">
                    <h4>Intuitive Design</h4>
                    <p>Exceptional user experience. Intuitively designed for effortless navigation. Highly recommended for a seamless and user-friendly interface.</p>
                    <p><strong>John Doe</strong><br>Marketing Manager</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <img src="https://via.placeholder.com/80" alt="Client Photo">
                    <h4>Mindblowing Service</h4>
                    <p>Mindblowing service that exceeds expectations. Unparalleled attention to detail. A service experience like no other.</p>
                    <p><strong>Jane Cooper</strong><br>Small Business Owner</p>
                </div>
            </div>
        </div>
    </div>
@endsection