<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Oldhome</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{ url('frontend/assets/img/favicon.png') }}">
  <link rel="apple-touch-icon" href="{{ url('frontend/assets/img/apple-touch-icon.png') }}">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" crossorigin href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ url('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/vendor/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/vendor/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}">

  <!-- Main CSS File -->
  <link rel="stylesheet" href="{{ url('frontend/assets/css/main.css') }}">

  <style>
    .navbar-nav-padding {
      padding: 10px;
    }

    .nav-gap {
      margin-left: 20px;
    }

.profile-card-container {
  display: flex;
  justify-content: center; 
  align-items: center; 
  height: 50vh; 
}

.profile-card {
  width: 100%; 
  max-width: 600px; 
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-body {
  padding: 2rem; 
}

.row {
  margin-bottom: 1rem; 
}

.row .col-sm-3 {
  font-weight: bold;
}

.row .col-sm-9 p {
  margin-bottom: 0;
}

hr {
  border-top: 1px solid #e0e0e0; 
  margin: 1rem 0; 
}

    
  </style>
  
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">
    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Care Home</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('account.dashboard') }}">Home<br></a></li>
            <li><a href="{{ route('account.about') }}">About</a></li>
            <li><a href="{{ route('account.event') }}">Events</a></li>
            <li class="dropdown">
              <a href="#services"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ route('account.food') }}">Food & Nutrition</a></li>
                <li><a href="{{ route('account.care') }}">Daily Care</a></li>
                <li><a href="{{ route('account.shelter') }}">Accommodation</a></li>
              </ul>
            </li>
            <li><a href="{{ route('account.contact') }}">Contact</a></li>
            <li><a href="{{ route('account.donation') }}">Donate</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <ul class="navbar-nav justify-content-end flex-grow-3 nav-gap">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hello, {{ Auth::user()->name }} </a>
            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="accountDropdown">
              <li>
                <a class="dropdown-item" href="{{ route('account.profile') }}">My Donations</a>
                <a class="dropdown-item" href="{{ route('account.logout') }}">Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </header>

  @extends('frontend.layouts.main')
  @section('main-container')

  <main class="main">
    <section id="profile" class="services section">
      <div class="container section-title" data-aos="fade-up">
        <h2>My Donations</h2>
        <p>Here are the donations you have made.</p>
      </div><!-- End Section Title -->

      <div class="profile-card-container">
        <div class="profile-card card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->name }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone No</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->phone_no }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->address }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Services Section -->
  </main>

  @endsection