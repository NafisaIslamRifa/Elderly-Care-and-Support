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