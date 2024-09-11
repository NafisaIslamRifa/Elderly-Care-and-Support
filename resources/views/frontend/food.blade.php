<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Oldhome</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{url("frontend/assets/img/favicon.png" )}}">
  <link rel="apple-touch-icon" href="{{url("frontend/assets/img/apple-touch-icon.png")}}">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" crossorigin href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{url("frontend/assets/vendor/bootstrap/css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{url("frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}">
  <link rel="stylesheet" href="{{url("frontend/assets/vendor/aos/aos.css")}}">
  <link rel="stylesheet" href="{{url("frontend/assets/vendor/fontawesome-free/css/all.min.css")}}">
  <link rel="stylesheet" href="{{url("frontend/assets/vendor/glightbox/css/glightbox.min.css")}}">
  <link rel="stylesheet" href="{{("frontend/assets/vendor/swiper/swiper-bundle.min.css" )}}">

  <!-- Main CSS File -->
  <link rel="stylesheet" href="{{url("frontend/assets/css/main.css")}} ">

  <style>
    .navbar-nav-padding {
      padding: 10px;
    }

    .nav-gap {
      margin-left: 20px;
    }

    /* General section styles */
.food.section {
    background-color: #f8f9fa; /* Light background for better contrast */
    padding-top: 30px;
    padding-bottom: 30px;
}

.section-title {
    font-size: 1.0rem;
    color: black;
    margin-bottom: 0.5rem;
}

.section-description {
    font-size: 1.2rem;
    color: #555;
}

/* Card styles */
.card {
    border: none;
    border-radius: 10px;
    overflow: hidden;
}

.card-img-top {
    border-bottom: 2px solid #0047AB;
}

.card-body {
    padding: 1.5rem;
}

.card-title {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.card-text {
    margin-bottom: 0.5rem;
    font-size: 1rem;
}

/* Responsive adjustments */
@media (max-width: 767.98px) {
    .section-title {
        font-size: 2rem;
    }

    .section-description {
        font-size: 1rem;
    }

    .card-title {
        font-size: 1.25rem;
    }

    .card-text {
        font-size: 0.9rem;
    }
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

   

    <!-- <section id="food" class="food section py-5"> -->
    <section id="services" class="services section">

    
    <div class="container section-title" data-aos="fade-up">
                <h2>Food Menu</h2>
                <p>Discover the delicious food options available at the Care Home</p>
            </div><!-- End Section Title -->
    <div class="container">

        <div class="album py-5 bg-light">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

                @foreach ($foods as $food)
                <div class="col">
                    <div class="card shadow-sm border-light rounded">
                        <!-- Display the food image -->
                        <img src="{{ asset('images/' . $food->image) }}" class="card-img-top" alt="{{ $food->name }}" style="height: 225px; object-fit: cover;">

                        <div class="card-body">
                            <h4 class="card-title" style="color:#0047AB">{{ $food->day }}</h4>
                           
                            <p class="card-text">
                                <span style="color:#1F51FF; font-weight: 600;">Breakfast:</span> {{ $food->breakfast }}
                            </p>
                            <p class="card-text">
                                <span style="color:#FF6347; font-weight: 600;">Lunch:</span> {{ $food->lunch }}
                            </p>
                            <p class="card-text">
                                <span style="color:#32CD32; font-weight: 600;">Dinner:</span> {{ $food->dinner }}
                            </p>
                            <!-- <p class="card-text">
                                <span style="color:#0047AB; font-weight: 600;">Cost:</span> {{ $food->cost }}
                            </p> -->

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

</section>


    <!-- dietary -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Dietary services</h2>
      <h6>In care Home ,Special dietary services are available for elder people based on diseases.</h6>
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
                <img class="card-img-top" src="{{url("frontend/images/tarmarind.png")}}" alt="Card image" width="100%" height="225">
                <div class="card-body">
                  <h2>Diabetes</h2>
                  <p class="card-text">Our dietary services for diabetics focus on balanced meals that include whole grains, lean proteins, and plenty of vegetables to help maintain stable blood sugar levels. </p>
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