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

      <img src="{{url("frontend/images/people.png")}}" alt="" data-aos="fade-in" style="opacity: 1.0;">

      <div class="container position-relative">

        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
          <!-- <h2 style="color: white;">Welcome To Care Home</h2>
          <p style="color: white;">Care Home offers personalized care for seniors in a nurturing environment</p> -->

        </div><!-- End Welcome -->

        
        
        
        <!-- End  Content-->

      </div>

    </section><!-- /Hero Section -->
<!-- Departments Section -->
<section id="departments" class="departments section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Weekly Food Plan</h2>
  <p>In care Home ,Special dietary services are available for elder people based on diseases.</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row">
    <div class="col-lg-3">
      <ul class="nav nav-tabs flex-column">
        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Saturday</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Sunday</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Monday</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Tuesday</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Wednesday</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-6">Thrusday</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-7">Friday</a>
        </li>
      </ul>
    </div>
    <div class="col-lg-9 mt-4 mt-lg-0">
      <div class="tab-content">
        <div class="tab-pane active show" id="departments-tab-1">
          <div class="row">
            <div class="col-lg-8 details order-2 order-lg-1">
              <h3>Saturday</h3>
              <p class="fst-italic">Breakfast: Paratha with vegetable curry and a glass of lassi.</p>
<p class="fst-italic">Lunch: Chicken biryani with a side of cucumber raita and fresh salad.</p>
<p class="fst-italic">Dinner: Fish curry, steamed rice, sautéed spinach, and seasonal fruit.</p>
              
            </div>
            <div class="col-lg-4 text-center order-1 order-lg-2">
              <img src="{{url("frontend/images/khichuri.png")}}" alt="" class="img-fluid" style="border:0.5px solid darkorchid ;border-radius:2rem;">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="departments-tab-2">
          <div class="row">
            <div class="col-lg-8 details order-2 order-lg-1">
              <h3>Sunday</h3>
              <p class="fst-italic">Breakfast: Paratha with vegetable curry and a glass of lassi.</p>
<p class="fst-italic">Lunch: Chicken biryani with a side of cucumber raita and fresh salad.</p>
<p class="fst-italic">Dinner: Fish curry, steamed rice, sautéed spinach, and seasonal fruit.</p>
            </div>
            <div class="col-lg-4 text-center order-1 order-lg-2">
              <img src="{{url("frontend/images/fish.png" )}}"alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="departments-tab-3">
          <div class="row">
            <div class="col-lg-8 details order-2 order-lg-1">
              <h3>Monday</h3>
              <p class="fst-italic">Breakfast: Paratha with vegetable curry and a glass of lassi.</p>
<p class="fst-italic">Lunch: Chicken biryani with a side of cucumber raita and fresh salad.</p>
<p class="fst-italic">Dinner: Fish curry, steamed rice, sautéed spinach, and seasonal fruit.</p>
            </div>
            <div class="col-lg-4 text-center order-1 order-lg-2">
              <img src="{{url("frontend/images/fish-2.png")}}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="departments-tab-4">
          <div class="row">
            <div class="col-lg-8 details order-2 order-lg-1">
              <h3>Tuesday</h3>
              <p class="fst-italic">Breakfast: Paratha with vegetable curry and a glass of lassi.</p>
<p class="fst-italic">Lunch: Chicken biryani with a side of cucumber raita and fresh salad.</p>
<p class="fst-italic">Dinner: Fish curry, steamed rice, sautéed spinach, and seasonal fruit.</p>
            </div>
            <div class="col-lg-4 text-center order-1 order-lg-2">
              <img src="{{url("frontend/images/fish-3.png")}}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="departments-tab-5">
          <div class="row">
            <div class="col-lg-8 details order-2 order-lg-1">
              <h3>Wednesday</h3>
              <p class="fst-italic">Breakfast: Paratha with vegetable curry and a glass of lassi.</p>
<p class="fst-italic">Lunch: Chicken biryani with a side of cucumber raita and fresh salad.</p>
<p class="fst-italic">Dinner: Fish curry, steamed rice, sautéed spinach, and seasonal fruit.</p>
            </div>
            <div class="col-lg-4 text-center order-1 order-lg-2">
              <img src="{{url("frontend/images/khic.png")}}" alt="" class="img-fluid">
            </div>
          </div>

      </div>

      <div class="tab-pane" id="departments-tab-6">
          <div class="row">
            <div class="col-lg-8 details order-2 order-lg-1">
              <h3>Thursday</h3>
              <p class="fst-italic">Breakfast: Panta bhat (fermented rice) with mashed potatoes and a glass of yogurt.</p>
              <p class="fst-italic">Lunch: Chicken curry, paratha, mixed vegetable stir-fry, and a side of fresh fruit</p>
              <p class="fst-italic">Dinner: Vegetable pulao with fish fry, cucumber salad, and a side of rosogolla.</p>
            </div>
            <div class="col-lg-4 text-center order-1 order-lg-2">
              <img src="{{url("frontend/images/food-4.png")}}"alt="" class="img-fluid">
            </div>
          </div>

      </div>



      <div class="tab-pane" id="departments-tab-7">
          <div class="row">
            <div class="col-lg-8 details order-2 order-lg-1">
              <h3>Friday</h3>
              <p class="fst-italic">Breakfast: Chapati with aloo bhaji and a glass of mango shake.</p>
              <p class="fst-italic">Lunch: Beef tehari with a side of cucumber-tomato salad and a piece of fresh lime.</p>
              <p class="fst-italic">Dinner: Fish bhorta, steamed rice, sautéed pumpkin, and a side of seasonal fruit.</p>
            </div>
            <div class="col-lg-4 text-center order-1 order-lg-2">
              <img src="{{url("frontend/images/beef.png")}}" alt="" class="img-fluid">
            </div>
          </div>

      </div>
    </div>
  </div>

</div>

</section><!-- /Departments Section -->


<!-- dietary -->
<div class="container section-title" data-aos="fade-up">
  <h2>Dietary services</h2>
  <p>In care Home ,Special dietary services are available for elder people based on diseases.</p>
</div><!-- End Section Title -->


<div class="container">

                <div class="album py-5 bg-body-tertiary">
                    <div class="container">
            
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            
                            
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="{{url("frontend/images/jack.png")}}" alt="Card image" width="100%" height="225">
                                    <div class="card-body">
                                        <h2>Heart Disease</h2>
                                        <p class="card-text">Our heart-healthy dietary services include incorporating omega-3 rich foods such as salmon, flaxs eeds, and walnuts. We provide a fiber-rich diet with whole grains, fruits, and vegetables</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                           

                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="{{url("frontend/images/tarmarind.png")}}"alt="Card image" width="100%" height="225">
                                    <div class="card-body">
                                    <h2>Diabetes</h2>
                                        <p class="card-text">Our dietary services for diabetics focus on balanced meals that include whole grains, lean proteins, and plenty of vegetables to help maintain stable blood sugar levels.  </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="{{url("frontend/images/carrot.png")}}" alt="Card image" width="100%" height="225">
                                    <div class="card-body">
                                    <h2>Hypertension</h2>
                                        <p class="card-text">For residents with hypertension, we offer low-sodium diets by reducing salt in meals and avoiding processed foods. We include high-potassium foods like bananas, spinach, and sweet potatoes,carrots.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                           
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>


                            
                        </div>
                    </div>
                </div>
            
            </div>
            

    

  </main>

  @endsection