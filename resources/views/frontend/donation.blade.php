
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
  <title>Oldhome</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
 

  <!-- Favicons -->
  <link rel="icon"href="{{url("frontend/assets/img/favicon.png" )}}">
  <link rel="apple-touch-icon" href="{{url("frontend/assets/img/apple-touch-icon.png")}}" >

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" >
  <link  rel="preconnect" crossorigin href="https://fonts.gstatic.com" >
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link  rel="stylesheet"href="{{url("frontend/assets/vendor/bootstrap/css/bootstrap.min.css")}}" >
  <link  rel="stylesheet" href="{{url("frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}">
  <link  rel="stylesheet"href="{{url("frontend/assets/vendor/aos/aos.css")}}">
  <link  rel="stylesheet" href="{{url("frontend/assets/vendor/fontawesome-free/css/all.min.css")}}">
  <link  rel="stylesheet" href="{{url("frontend/assets/vendor/glightbox/css/glightbox.min.css")}}" >
  <link  rel="stylesheet" href="{{("frontend/assets/vendor/swiper/swiper-bundle.min.css" )}}"> 

  <!-- Main CSS File -->
   <link  rel="stylesheet" href="{{url("frontend/assets/css/main.css")}} "> 

   <style>
    .navbar-nav-padding {
      padding: 10px; 
    }

    .nav-gap {
      margin-left: 20px; 
    }
  </style>

  
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{url("/")}}" class="logo d-flex align-items-center me-auto">
        
          <h1 class="sitename">Care Home</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('account.dashboard') }}" >Home<br></a></li>
            <li><a href="{{ route('account.about') }}">About</a></li>
            
            <li><a href="{{ route('account.event') }}">Events</a></li>
            
            <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
              
               
                </li>
                <li><a href="{{ route('account.food') }}">Food & Nutrition</a></li>
                <li><a href="{{ route('account.care') }}">Daily Care</a></li>
                <li><a href="{{ route('account.shelter') }}">Accommodation</a></li>
              </ul>
            </li>
            <li><a href="{{ route('account.contact') }}">Contact</a></li>
            
            <li><a href="{{ route('account.donation') }}" class="active">Donate</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
       
        <!-- <a class="cta-btn d-none d-sm-block" href="{{ route('account.logout') }}">Log out</a> -->

        
                    <ul class="navbar-nav justify-content-end flex-grow-3  nav-gap">

                       
                            
                        
                        
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





@extends("frontend.layouts.main")
@section("main-container")

    <main class="main">

    <section id="doctors" class="doctors section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Top donors</h2>
  <p>Here is a short opinion of our Donors about Care Home</p>
</div><!-- End Section Title -->

<div class="container">
  <div class="row gy-4">
    @php
        $phrases = [
            "Care Home is a leading provider of caring and nursing services in Bangladesh.",
            "In Bangladesh, Care Home stands out as a top provider of nursing and caring services.",
            "One of the best caring and nursing service providers in Bangladesh is Care Home.",
            "One of the best providers of elderly care in Bangladesh, Care Home uses donations to enhance the lives of its residents.",
        ];
    @endphp

    @foreach($topDonations as $index => $donation)
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <div class="team-member d-flex align-items-start">
       
        <div class="member-info">
          <h4>{{ $donation->name }}</h4>
          <span>{{ $donation->amount }} TK</span>
          <p>{{ $phrases[$index % count($phrases)] }}</p>
        </div>
      </div>
    </div><!-- End Team Member -->
    @endforeach
  </div>
</div>

</section>
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-sm-12 p-0 box">
            <div class="card rounded-0 border-0 card2" id="paypage">
                <div class="form-card">
                    <h2 id="heading2" class="text-black">Donation Form</h2>
                    <form method="POST" action="{{ route('account.pay') }}"  class="needs-validation">
                        @csrf
                        
                        <label class="pay">Name</label>
                        <input type="text" name="name" placeholder="Enter your name" required>

                        <label class="pay">Email Address</label>
                        <input type="email" name="email" placeholder="example@example.com" required>

                        <label class="pay">Donation Amount</label>
                        <input type="text" name="amount" placeholder="Enter amount" required>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="submit" value="MAKE A DONATION &nbsp; " class="btn btn-warning placeicon purple-button">
                               
                                <!-- <input type="submit" value="MAKE A DONATION &nbsp; " class="btn placeicon primary-button" style="background-color: #1977cc; border-color: blue; color: white;">
 -->

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





       

    </main>
    

    @endsection