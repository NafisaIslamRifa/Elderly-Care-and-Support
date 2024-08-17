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
            
            <li><a href="{{ route('account.event') }}" >Events</a></li>
            
            <li class="dropdown"><a href="#services"class="active"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
                <h2>Accommodation</h2>
                <p>Introduce you with our well planned Accommodation system at Care Home</p>
            </div><!-- End Section Title -->

            
            

        </section><!-- /Services Section -->

          
        
	<div class="container col-6">
		<div class="h1 text-center text-dark my-5" id="pageHeaderTitle" ></div>

		<article class="postcard light blue ">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="{{url("frontend/images/room.png")}}" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark ">
				<h1 class="postcard__title blue"><a href="#"> Spacious Room</a></h1>
				<div class="postcard__subtitle small">
					
                <p><strong style="color:  #C35214;">Explore our cozy indoor rooms designed for comfort and relaxation, offering a peaceful retreat for our residents.</strong></p>

					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">At Care Home, our private rooms provide spacious, comfortable living spaces with en-suite bathrooms, emergency call systems, and climate control. Residents can personalize their rooms with their own furnishings and décor, creating a homely and welcoming environment.</div>
				
			</div>
		</article>


		<article class="postcard light red ">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="{{url("frontend/images/common.png")}}" alt="Image Title" />	
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title red"><a href="#">Common Room</a></h1>
				<div class="postcard__subtitle small">
                <p><strong style="color:  #C35214;">Explore our cozy indoor rooms designed for comfort and relaxation, offering a peaceful retreat for our residents.</strong></p>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">At Care Home, our common room is a vibrant hub where residents gather to socialize, engage in activities, and build friendships. With cozy seating areas, entertainment options, and a welcoming atmosphere, it fosters a sense of community and belonging. It's a place where residents can unwind, enjoy group events, and create lasting memories togethe!</div>
				
			</div>
		</article>


		<article class="postcard light green">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="{{url("frontend/images/prayer.png" )}}"alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title green"><a href="#">Prayer Room</a></h1>
				<div class="postcard__subtitle small">
                <p><strong style="color:  #C35214;">Discover our tranquil prayer room, a serene sanctuary dedicated to spiritual reflection and peaceful contemplation.</strong></p>

				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">At Care Home, our prayer room is designed to provide a serene and tranquil space for residents to engage in moments of reflection and prayer. Furnished with comfortable seating and peaceful ambiance, it offers a quiet retreat within our community. Residents are encouraged to use this space to find solace and connect spiritually at their convenience</div>
				
			</div>
		</article>
		<article class="postcard light yellow">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="{{url("frontend/images/gard.png")}}" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title yellow"><a href="#">Garden</a></h1>
				<div class="postcard__subtitle small">
                <p><strong style="color:  #C35214;">Explore our cozy indoor rooms designed for comfort and relaxation, offering a peaceful retreat for our residents.</strong></p>
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">At Care Home, our garden is a tranquil oasis where residents can relax amidst lush greenery and colorful blooms. It offers a peaceful retreat for enjoying fresh air, gentle strolls, and moments of quiet contemplation. Designed with accessibility and sensory stimulation in mind, it provides a serene outdoor space that enhances well-being and connection with nature</div>
				
			</div>
		</article>
	</div>

</section>


    </main>

    @endsection