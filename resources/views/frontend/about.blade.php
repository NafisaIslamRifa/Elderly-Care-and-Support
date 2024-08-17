
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
            <li><a href="{{ route('account.about') }}" class="active">About</a></li>
            
            <li><a href="{{ route('account.event') }}">Events</a></li>
            
            <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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

  <img src="{{url("frontend/images/women-1.png")}} "alt="" data-aos="fade-in" ">

  <div class="container position-relative">

    <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
      <!-- <h2 style="color: white;">Welcome To Care Home</h2>
      <p style="color: white;">Care Home offers personalized care for seniors in a nurturing environment</p> -->

    </div><!-- End Welcome -->

    <div class="content row gy-4">
      <div class="col-lg-4 d-flex align-items-stretch"  >
        <div class="why-box" data-aos="zoom-out" data-aos-delay="200"; style="opacity:1.5;border-radius: 15px;">
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
        <img src="{{url("frontend/images/old.png")}}"class="img-fluid" alt="">
        
      </div>

      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <h2><strong>Our Mission</strong></h2>
<p>At Care Home, our mission is to provide compassionate and exceptional care to our residents. We strive to create a nurturing environment where each individual feels valued, supported, and respected. Through personalized care plans and dedicated staff, we aim to enhance the quality of life for every resident we serve.Through continuous improvement and dedicated teamwork, we strive to set the standard for excellence in senior care, providing families with peace of mind knowing their loved ones are in caring hands.We are committed to fostering a supportive community where residents feel empowered and valued, promoting their independence and well-being</p>
      </div>

    </div>

  </div>

</section><!-- /About Section -->

<!-- Stats Section -->
<section id="stats" class="stats section light-background">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <i class="fas fa-walking"></i>
        <div class="stats-item">
          <span data-purecounter-start="0" data-purecounter-end="850" data-purecounter-duration="1" class="purecounter"></span>
          <p>Residents</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <i class="fas fa-bed"></i>
        <div class="stats-item">
          <span data-purecounter-start="0" data-purecounter-end="180" data-purecounter-duration="1" class="purecounter"></span>
          <p>Accommodation</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <i class="fas fa-restroom"></i>
        <div class="stats-item">
          <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
          <p>Care Givers</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <i class="fas fa-hand-holding-usd"></i>
        <div class="stats-item">
          <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
          <p>Donation</p>
        </div>
      </div><!-- End Stats Item -->

    </div>

  </div>

</section><!-- /Stats Section -->







<!-- Doctors Section -->
<section id="doctors" class="doctors section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our People</h2>
    <p>Here is a short opinion of our staffs and residents about Care Home</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="{{url("frontend/images/rev-2.png")}}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Tarek Hasan</h4>
            <span>Manager</span>
            <p>Care home is absolutely the best place for the elders</p>
            
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="{{url("frontend/images/nurse.png" )}}"class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Mira Islam</h4>
            <span>Nurse</span>
            <p>We provide best facilities at care home including medical treatment</p>
            
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="{{url("frontend/images/rev-3.png" )}}"class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Samira Ali</h4>
            <span>Nutritionist</span>
            <p>At care home, We provide Diet and nutritious food specially made for the elder people</p>
            
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="{{url("frontend/images/man.png" )}}"class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Akbar Haque</h4>
            <span>Resident</span>
            <p>Care Home is my second Home</p>
           
          </div>
        </div>
      </div><!-- End Team Member -->

    </div>

  </div>

</section><!-- /Doctors Section -->

<!-- Faq Section -->
<section id="faq" class="faq section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Frequently Asked Questions</h2>
    <p>Get answers to your most asked questions</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

        <div class="faq-container">

          <div class="faq-item faq-active">
            <h3>Is Care Home a safe place for seniors??</h3>
            <div class="faq-content">
              <p>Yes, Care Home prioritizes safety with 24/7 staff, secure facilities, and emergency response plans in place.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Do residents have help with daily tasks?</h3>
            <div class="faq-content">
              <p>Absolutely, our caring staff assists with daily tasks like bathing, dressing, and medication management</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Can family visit anytime?</h3>
            <div class="faq-content">
              <p>Yes, family members are welcome to visit anytime, ensuring residents stay connected with their loved ones</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Are there doctors available if needed?</h3>
            <div class="faq-content">
              <p>Yes, doctors and nurses are on call to provide medical care and monitor residents' health regularly.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>How does the care home handle medical emergencies?

                </h3>
            <div class="faq-content">
              <p>Our care home is equipped to handle medical emergencies with trained staff available 24/7. We have protocols in place to ensure prompt response and coordination with local emergency services</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>What activities and social programs are available for residents?

            </h3>
            <div class="faq-content">
              <p>We offer a variety of activities and social programs designed to engage and entertain our residents. These include daily exercise classes, arts and crafts.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

        </div>

      </div><!-- End Faq Column-->

    </div>

  </div>

</section><!-- /Faq Section -->




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