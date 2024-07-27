@extends("frontend.layouts.main")
@section("main-container")

    <main class="main">

    <section id="doctors" class="doctors section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Top donors</h2>
  <p>Here is a short opinion of our Donors about Care Home</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="{{url("frontend/images/rev-2.png" )}}"class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Tarek Hasan</h4>
          <span>CEO,Brac</span>
          <p>"Care Home is one of the top caring and nursing service providers in Bangladesh."</p>
          
        </div>
      </div>
    </div><!-- End Team Member -->

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="{{url("frontend/images/indian-1.jpg")}}" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Miraj Islam</h4>
          <span>Businessman</span>
          <p>"Care Home is one of the top caring and nursing service providers in Bangladesh."</p>
          
        </div>
      </div>
    </div><!-- End Team Member -->

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="{{url("frontend/images/rev-3.png")}}" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Samira Ali</h4>
          <span>Doctor</span>
          <p>"They are very much professional in this sector. Their customer service is very good."</p>
          
        </div>
      </div>
    </div><!-- End Team Member -->

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="{{url("frontend/images/indwomen.jpg")}}" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Rodela Haque</h4>
          <span>Founder, Webcoder-it </span>
          <p>"I have been taking their services for a long time. Their professionalism is of a high level."</p>
         
        </div>
      </div>
    </div><!-- End Team Member -->

  </div>

</div>

</section>
    
<div class="container">
<div class="row justify-content-center">
<div class="col-md-7 col-sm-12 p-0 box">
                        <div class="card rounded-0 border-0 card2" id="paypage">
                            <div class="form-card">
                                <h2 id="heading2" class="text-black">Donation Form</h2>
                                <!-- <div class="radio-group">
                                    <div class="radio" data-value="credit"><img src="https://i.imgur.com/28akQFX.jpg" width="200px" height="60px"></div>
                                    <div class="radio" data-value="paypal"><img src="{{url("frontend/images/bkash.png")}}" width="200px" height="60px"></div>
                                    <br>
                                </div> -->
                                <label class="pay">Name</label>
                                <input type="text" name="holdername" placeholder="">

                                <!-- Email Address -->
                    <label class="pay">Email Address</label>
                    <input type="email" name="email" placeholder="example@example.com">

                                <!-- <div class="row">
                                    <div class="col-8 col-md-6">
                                        <label class="pay">Card Number</label>
                                        <input type="text" name="cardno" id="cr_no" placeholder="0000-0000-0000-0000" minlength="19" maxlength="19">
                                    </div>
                                    <div class="col-4 col-md-6">
                                        <label class="pay">CVV</label>
                                        <input type="password" name="cvcpwd" placeholder="●●●" class="placeicon" minlength="3" maxlength="3">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="pay">Expiration Date</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="exp" id="exp" placeholder="MM/YY" minlength="5" maxlength="5">
                                    </div>
                                </div> -->


                                <!-- Donation Amount -->
                    <label class="pay">Donation Amount</label>
                    <input type="text" name="amount" placeholder="Enter amount">


                                <div class="row">
                                <div class="col-md-6">
    <!-- <input type="submit" value="MAKE A DONATION &nbsp; " class="btn btn-warning placeicon"> -->
    <input type="submit" value="MAKE A DONATION &nbsp; " class="btn btn-warning placeicon purple-button">

</div>

                                </div>
                            </div>
                        </div>
                    </div>
        
                    </div>
                    </div>






       

    </main>

    @endsection