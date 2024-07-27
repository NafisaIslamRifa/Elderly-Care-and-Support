
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