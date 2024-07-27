
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
                            
                            
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="{{url("frontend/images/yoga1.png")}}" alt="Card image" width="100%" height="225">
                                    <div class="card-body">
                                    <h5 class="card-title"style="color:#4B0082">Yoga</h5>
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
                                    <h5 class="card-title"style="color:#4B0082;">Morning Walk</h5>
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
                                    <h5 class="card-title"style="color: #4B0082;">Social Outing</h5>
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
                                    <h5 class="card-title"style="color:#4B0082;">Indoor Games</h5>
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
                                    <h5 class="card-title"style="color: #4B0082;">Gardening</h5>
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
                                    <h5 class="card-title"style="color: #4B0082;">Health care Services</h5>
                                        <p class="card-text">At our care home, we prioritize the health and well-being of our residents by offering comprehensive health care services. Our dedicated team of healthcare professionals provides personalized medical attention. </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            

        </section><!-- /Services Section -->


    </main>

    @endsection