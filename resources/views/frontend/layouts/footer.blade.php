<footer id="footer" class="footer light-background">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6  footer-about">
        <a href="{{ route('account.dashboard') }}" class="logo d-flex align-items-center">
          <span class="sitename">Care Home</span>
        </a>
        <div class="footer-contact pt-3">
          <p>United International University</p>
          <p>Madani Avenue,Dhaka-1212</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+01879409384</span></p>
          <p><strong>Email:</strong> <span>nafisaislamrifa@gmail.com</span></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href="https://x.com/"><i class="bi bi-twitter-x"></i></a>
          <a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-3 footer-links">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="{{ route('account.dashboard') }}">Home</a></li>
          <li><a href="{{ route('account.about') }}">About us</a></li>
          <li><a href="{{ route('account.food') }}">Food</a></li>
          <li><a href="{{ route('account.shelter') }}">Accommodation</a></li>
          <li><a href="{{ route('account.contact') }}">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-3 footer-links">
        <h4>Our Mission</h4>
        <ul>
          <li><a href="https://www.prothomalo.com/">Newspaper</a></li>
          <li><a href="https://www.google.com/maps/@23.7859296,90.43968,14z?entry=ttu">Site Map</a></li>
          


          <li><a href="{{ route('account.donation') }}">Donation Methods</a></li>
          <li><a href="https://www.youtube.com/watch?v=4fqoeVO3gbM">YouTube</a></li>
          <li><a href="https://mail.google.com/">Email</a></li>
        </ul>
      </div>



    </div>
  </div>

  <div class="container copyright text-center mt-4">

    <div class="credits">


    </div>
  </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{url("frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{url("frontend/assets/vendor/php-email-form/validate.js")}}"></script>
<script src="{{url("frontend/assets/vendor/aos/aos.js")}}"></script>
<script src="{{url("frontend/assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
<script src="{{url("frontend/assets/vendor/purecounter/purecounter_vanilla.js")}}"></script>
<script src="{{url("frontend/assets/vendor/swiper/swiper-bundle.min.js")}}"></script>

<!-- Main JS File -->
<script src="{{url("frontend/assets/js/main.js")}}"></script>

</body>

</html>