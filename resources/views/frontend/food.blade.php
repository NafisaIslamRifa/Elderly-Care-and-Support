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