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
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Care Home</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('account.dashboard') }}">Home<br></a></li>
            <li><a href="{{ route('account.about') }}">About</a></li>
            
            <li><a href="{{ route('account.event') }}"class="active">Events</a></li>
            
            <li class="dropdown"><a href=""><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
               
               
                </li>
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
       
        <!-- <a class="cta-btn d-none d-sm-block" href="{{ route('account.logout') }}">Log out</a> -->

        
                    <ul class="navbar-nav justify-content-end flex-grow-3  nav-gap">

                       
                            
                        
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hello, {{ Auth::user()->name }} </a>
                           
                            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="accountDropdown">                          
                                <li>
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

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <img src="{{url("frontend/images/women.png")}}" alt="" data-aos="fade-in" style="opacity: 1.0;">

            <div class="container position-relative">

                <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                    <!-- <h2 style="color: white;">Welcome To Care Home</h2>
          <p style="color: white;">Care Home offers personalized care for seniors in a nurturing environment</p> -->

                </div><!-- End Welcome -->






                <!-- End  Content-->

            </div>




            </div>

        </section><!-- /Hero Section -->



        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Events</h2>
                <p>Introduce you with all the events at Care Home</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="album py-5 bg-body-tertiary">
                    <div class="container">
            
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            
                            
                            <!-- <div class="col">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="{{url("frontend/images/yoga1.png")}}" alt="Card image" width="100%" height="225">
                                    <div class="card-body">
                                    <h5 class="card-title"style="color:#1977cc">Yoga</h5>
                                        <p class="card-text">Yoga at our care home offers residents gentle exercises and relaxation techniques to enhance flexibility, strength, and mental well-being. It promotes physical health and inner peace in a supportive and calming environmen</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                           

                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="{{url("frontend/images/walk-1.png")}}" alt="Card image" width="100%" height="225">
                                    <div class="card-body">
                                    <h5 class="card-title"style="color:#1977cc;">Morning Walk</h5>
                                        <p class="card-text">Morning walks at our care home provide residents with a refreshing start to their day, promoting physical activity and enhancing overall well-being. It's a simple yet effective way to encourage movement and enjoyment of the outdoors in a safe place. </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="{{url("frontend/images/gather.png")}}" alt="Card image" width="100%" height="225">
                                    <div class="card-body">
                                    <h5 class="card-title"style="color: #1977cc;">Social Outing</h5>
                                        <p class="card-text">At our care home, social outings play a vital role in enhancing the well-being of our residents. These excursions provide opportunities for social interaction, exploration, and enjoyment of the local community. </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="{{url("frontend/images/game.png")}}" alt="Card image" width="100%" height="225">
                                    <div class="card-body">
                                    <h5 class="card-title"style="color:#1977cc;">Indoor Games</h5>
                                        <p class="card-text">Indoor games at our care home offer residents enjoyable activities that stimulate mental agility and social interaction. They provide a fun way to pass time .Indoor games at our care home foster social interaction.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="{{url("frontend/images/garden.png")}}" alt="Card image" width="100%" height="225">
                                    <div class="card-body">
                                    <h5 class="card-title"style="color: #1977cc;">Gardening</h5>
                                        <p class="card-text">Gardening at our care home allows residents to connect with nature, engage in therapeutic activities, and enjoy the satisfaction of nurturing plants. It provides a peaceful and meaningful way and it is a good form of physical exercise.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="{{url("frontend/images/health-1.png")}}" alt="Card image" width="100%" height="225">
                                    <div class="card-body">
                                    <h5 class="card-title"style="color: #1977cc;">Health care Services</h5>
                                        <p class="card-text">At our care home, we prioritize the health and well-being of our residents by offering comprehensive health care services. Our dedicated team of healthcare professionals provides personalized medical attention. </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            
                                          
                                        </div>
                                    </div>
                                </div>
                            </div> -->






                            @foreach ($events as $event)
<div class="col">
    <div class="card shadow-sm">
    <!-- <img class="card-img-top" src="{{ url('frontend/images/' . $event->image) }}"alt="{{ $event->name }}" width="100%" height="225"> -->
    <!-- <img class="card-img-top" src="{{ asset('frontend/images/' . $event->image) }}" alt="Card image" width="100%" height="225">

        -->
        <img src="{{ asset('images/' . $event->image) }}" class="card-img-top" alt="{{ $event->name }}" width="100%" height="225">
        <div class="card-body">
            <h5 class="card-title" style="color:#1977cc">{{ $event->name }}</h5>
            <p class="card-text" style="color:#1977cc">Date: {{ $event->date }}</p>
            <p class="card-text" style="color:#1977cc">Location: {{ $event->location }}</p>
            <p class="card-text">{{ $event->description }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <!-- Add any additional content or functionality here if needed -->
            </div>
        </div>
    </div>
</div>
@endforeach
                        </div>
                    </div>
                </div>
            
            </div>
            

        </section><!-- /Services Section -->


    </main>

    @endsection