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
            <li><a href="{{ route('account.dashboard') }}" >Home<br></a></li>
            <li><a href="{{ route('account.about') }}">About</a></li>
            
            <li><a href="{{ route('account.event') }}">Events</a></li>
            
            <li class="dropdown"><a href="#services" class="active"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <!-- <li><a href="#">Medical Treatment</a></li> -->
               
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

            <img src="{{url("frontend/images/older-1.png")}}" alt="" data-aos="fade-in" style="opacity: 1.0;">

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
                <h2>Daily Care</h2>
                <p>Introduce you with all the Daily care services provided at Care Home</p>
            </div><!-- End Section Title -->

            


            <div class="container py-3 col-8">
  <div class="title h1 text-center"></div>
  <!-- Card Start -->
  <div class="card">
    <div class="row ">

      <div class="col-md-7  px-3">
        <div class="card-block px-6">
        <h4 class="card-title"style="color:  #8A2BE2;">HouseKeeping</h4>
          <p class="card-text">
          At Care Home, our housekeeping services ensure that residents' living spaces are clean, safe, and well-maintained. Regular cleaning, maintenance tasks are carried out by our dedicated staff to provide a comfortable and hygienic environment for all residents.
          </p>
          <p class="card-text">At Care Home, our commitment to excellence ensures that every aspect of our housekeeping services is designed to enhance residents' quality of life and peace of mind..</p>
          <br>
          
        </div>
      </div>

      <div class="col-md-5">
        <img class="card-img-top d-block w-100" src="{{url("frontend/images/housekeep.png")}}" alt="Card image cap">
      </div>
     
    </div>
  </div>
  <!-- End of card -->

</div>

<div class="container py-3 col-8">
  <div class="title h1 text-center"></div>
  <!-- Card Start -->
  <div class="card">
    <div class="row ">

      <div class="col-md-5">
        <img class="card-img-top d-block w-100" src="{{url("frontend/images/laundry.jpg")}}" alt="Card image cap">
      </div>

      <div class="col-md-7 px-3">
        <div class="card-block px-6">
        <h4 class="card-title" style="color:  #8A2BE2;">Laundry</h4>
         
          <p class="card-text">
          At Care Home, our laundry services ensure that residents' clothing and linens are regularly washed, dried, and neatly folded. We handle all laundry needs with care and attention to detail, providing fresh and clean items to enhance the residents' comfort and well-being
          </p>
          <p class="card-text">Our dedicated team pays meticulous attention to sorting, washing, and folding clothes according to specific instructions, providing personalized care that meets diverse needs. </p>
          <br>
         
        </div>
      </div>
     
    </div>
  </div>
  <!-- End of card -->

</div>




<div class="container py-3 col-8">
  <div class="title h1 text-center"></div>
  <!-- Card Start -->
  <div class="card">
    <div class="row ">

      <div class="col-md-7 px-3">
        <div class="card-block px-6">
        <h4 class="card-title"style="color:  #8A2BE2;">Security</h4>
          
          <p class="card-text">
          At Care Home, we prioritize the safety and security of our residents with a comprehensive system that includes CCTV cameras. Our surveillance system monitors common areas and entrances 24/7, ensuring a secure environment and providing peace of mind for residents and their families.
          </p>
          <p class="card-text">This commitment to safety allows residents to feel comfortable and protected in their home. Additionally, our staff is trained to respond promptly to any security concerns</p>
          <br>
          <!-- <a href="#" class="mt-auto btn btn-warning style="">Read More</a> -->
          


        </div>
      </div>

      <div class="col-md-5">
        <img class="card-img-top d-block w-100" src="{{url("frontend/images/cctv.jpg")}}" alt="Card image cap">
      </div>
     
    </div>
  </div>
  <!-- End of card -->

</div>



 
 <br>
<br>
 
            

        </section><!-- /Services Section -->


    </main>

    @endsection