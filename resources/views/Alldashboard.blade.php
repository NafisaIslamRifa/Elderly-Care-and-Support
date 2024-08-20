

















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
            <li><a href="{{ route('account.login') }}" class="active">Home<br></a></li>
            <li><a href="{{ route('account.login') }}">About</a></li>
            
            <li><a href="{{ route('account.login') }}">Events</a></li>
            
            <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <!-- <li><a href="#">Medical Treatment</a></li> -->
               
                </li>
                <li><a href="{{ route('account.login') }}">Food & Nutrition</a></li>
                <li><a href="{{ route('account.login') }}">Daily Care</a></li>
                <li><a href="{{ route('account.login') }}">Accommodation</a></li>
              </ul>
            </li>
            <li><a href="{{ route('account.login') }}">Contact</a></li>
            <li><a href="{{ route('account.login') }}">Donate</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
       
        
        
                    <ul class="navbar-nav justify-content-end flex-grow-3  nav-gap">

                       
                            
                        
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Authentication</a>
                           
                            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="accountDropdown"> 
                                <li>
                                    <a class="dropdown-item" href="{{ route('account.login') }}">Login</a>
                                </li>
                                
                                <li>
                                    <a class="dropdown-item" href="{{ route('account.register') }}">Signup</a>
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

      <img src="{{url("frontend/images/old.png")}}" alt="" data-aos="fade-in" style="opacity: 1.0;">

      <div class="container position-relative">

        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
          <!-- <h2 style="color: white;">Welcome To Care Home</h2>
          <p style="color: white;">Care Home offers personalized care for seniors in a nurturing environment</p> -->

        </div><!-- End Welcome -->

        <div class="content row gy-4">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="why-box" data-aos="zoom-out" data-aos-delay="200" style="opacity:1.5;border-radius: 15px;">
              <h3>Why Choose Care Home?</h3>
              <p>
                Choose Care Home for personalized senior care in a nurturing environment. Our dedicated staff ensures physical, emotional, and social well-being with tailored services, nutritious meals, engaging activities, and comprehensive medical support, fostering a comfortable and fulfilling life for residents
              </p>
              <div class="text-center">
                <a href="#about" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->
          
          
        </div>
        
        
        <!-- End  Content-->

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4 gx-5">

          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
            <img src="{{url("frontend/images/women.png")}}"class="img-fluid" alt="">
            
          </div>

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3>About Us</h3>
            <p>
              Welcome to Care Home, where comfort meets care. Our mission is to provide a nurturing and serene environment for seniors, ensuring they feel valued, respected, and truly at home. . 
            </p>
            <ul>
              <li>
                <i class="fas fa-utensils"></i>
                <div>
                  <h5>Healthy Meals</h5>
                  <p>Our fresh ingredients and carefully planned menus support health conditions such as diabetes and hypertension, ensuring every meal is both healthy and enjoyable</p>
                </div>
              </li>
              <li>
                <i class="fas fa-home"></i>
                <div>
                  <h5>Safe shelter</h5>
                  <p>Care Home offers a safe and comfortable shelter for seniors, providing a secure environment where residents can feel at ease. </p>
                </div>
              </li>
              <li>
                <i class="fas fa-wheelchair"></i>
                <div>
                  <h5>Proper Care</h5>
                  <p>Our dedicated staff provides personalized attention and support, promoting well-being and a high quality of life for every individual</p>
                </div>
              </li>
            </ul>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

   

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Get Best Services At Care Home</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
               
                <i class="fas fa-home"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Resident Care</h3>
              </a>
              <p>At Care Home, we offer 24/7 support in a comfortable, accessible environment. Our dedicated staff provides personal care, engaging activities, nutritious meals, and medical supervision,. .</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-utensils"></i>
               
              </div>
              <a href="#" class="stretched-link">
                <h3>Elderly Nutrition</h3>
              </a>
              <p>At Care Home, we provide balanced, nutritious meals tailored to seniors' dietary needs. Using fresh ingredients, our meals support health conditions like diabetes and hypertension, promoting overall well-being and enhancing quality of life. .</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-hospital-user"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Skilled Nursing</h3>
              </a>
              <p>At Care Home, our skilled nursing services offer 24/7 medical care and support from experienced healthcare professionals. We provide personalized treatment plans, .</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
               
                <i class="fas fa-eye"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Security</h3>
              </a>
              <p>At Care Home, the security and safety of our residents are paramount. We maintain a secure environment with 24/7 monitoring and controlled access to ensure their well-being. Our dedicated staff provides attentive service,.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-wheelchair"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Assistance</h3>
              </a>
              <p>At Care Home, our skilled nursing services offer 24/7 medical care and support from experienced healthcare professionals. We provide personalized treatment plans tailored to meet the specific needs of each resident, including specialized assistance for wheelchair users to help them regain mobility and independence.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                
                <i class="fab fa-watchman-monitoring"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Daily Monitoring</h3>
              </a>
              <p>At Care Home, we prioritize daily care routines that ensure the well-being and comfort of our residents. Our dedicated staff provides personalized assistance with activities of daily living, such as bathing, dressing, and medication management.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

   

  
    
   

   

    <!-- Testimonials Section  -->
    <section id="testimonials" class="testimonials section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
            <h3>Testimonials</h3>
            <p>
              Testimonials for a care home are invaluable as they highlight the quality of care and support provided to residents and their families. They offer prospective residents and their loved ones reassurance about the home's standards and the compassionate nature of its staff.
            </p>
          </div>
    
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                <!-- {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                } -->
              </script>
              <div class="swiper-wrapper">
    
                <!-- First Testimonial -->
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="{{url("frontend/images/rev-3.png")}}" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Samira Ali</h3>
                        <h4>Teacher</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>The care home exceeded my expectations with its attentive staff and comfortable environment. I feel grateful for the exceptional care provided to my loved one.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->
    
                <!-- Second Testimonial -->
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="{{url("frontend/images/rev-2.png")}}" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Shafiql Islam</h3>
                        <h4>Actor</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>The level of care and attention provided by the staff is outstanding. My family and I are extremely satisfied with the overall experience at the care home.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->
    
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
    
        </div>
      </div>
    </section>
    

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>Lets have a glimpse of our happy residents</p>
      </div><!-- End Section Title -->

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/game-1.png" class="glightbox" data-gallery="images-gallery">
                <img src="{{url("frontend/images/game-1.png")}} "alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/eat-1.png" class="glightbox" data-gallery="images-gallery">
                <img src="{{url("frontend/images/eat-1.png")}}" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/tv-1.png" class="glightbox" data-gallery="images-gallery">
                <img src="{{url("frontend/images/tv-1.png")}}" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/health-1.png" class="glightbox" data-gallery="images-gallery">
                <img src="{{url("frontend/images/health-1.png")}}" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/walk-1.png" class="glightbox" data-gallery="images-gallery">
                <img src="{{url("frontend/images/walk-1.png")}}" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/bed-1.png" class="glightbox" data-gallery="images-gallery">
                <img src="{{url("frontend/images/bed-1.png")}}" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/eat-1.png" class="glightbox" data-gallery="images-gallery">
                <img src="{{url("frontend/images/eat-1.png")}} "alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/game-1.png" class="glightbox" data-gallery="images-gallery">
                <img src="{{url("frontend/images/game-1.png")}}" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

    
  </main>

 @endsection