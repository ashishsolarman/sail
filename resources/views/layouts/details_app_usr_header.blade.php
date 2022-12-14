<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nagpal Properties</title>

    <link rel="shortcut icon" href="{{ asset('public/img/fav.png') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/details_app_usr.css') }}">
    <!--owl-carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @yield('css')
    
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light main-header sticky-top">
      <div class="container">
        <a class="navbar-brand" href="{{ url('home') }}" style="width:325px;">
        <img src="../public/img/finallogo.png" alt="Logo" style="width:100%;">
      </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
          <li class="nav-item">
        <a class="nav-link" aria-current="page" href="{{ url('home') }}">Home</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('about-us') }}">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('sale') }}" tabindex="-1" aria-disabled="true">Sale</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('rent') }}" tabindex="-1" aria-disabled="true">Rent</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('project') }}" tabindex="-1" aria-disabled="true">Projects</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('collaboration') }}" tabindex="-1" aria-disabled="true">Collaboration</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('contact-us') }}" tabindex="-1" aria-disabled="true">Contact Us</a>
        </li>
      </ul>
      </div> 
    </nav>
    <!-- /navbar -->
  @yield('content')

  <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #000">

    <!-- Section: Social media -->
    <div class="container-fluid py-3" style="background-color: #16a9b5;">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="d-flex footer-left">
              <span>Get latest updates on social networks</span>
                </div>
                  </div>
                    <div class="col-12 col-md-6">
                      <div class="d-flex footer-right">
                    <a href="https://www.facebook.com/Nagpal-Properties-101480885142411" target="_blank" class="text-white me-4"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="https://www.instagram.com/nagpalproperties/" target="_blank" class="text-white me-4"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://in.linkedin.com/company/nagpal-properties" target="_blank" class="text-white me-4"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container-fluid text-center text-md-start mt-5">
        <div class="container">
    <!-- Grid row -->
    <div class="row last">
    <!-- Grid column -->
    <div class="col-lg-3 col-md-3 col-sm-12">
    <!-- Content -->
    <h6 class="text-uppercase fw-bold">Nagpal Properties</h6> 
      <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #ffed00; height: 2px"/>
    <p style="text-align: justify;">Nagpal Properties is a network of professionals who know and understand that their 
    business is about more than just real estate and construction. It’s about people. People 
    whose homes are the central plank upon which they will nurture families, build wealth, and 
    find sanctuary.</p>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-3 col-md-3 col-sm-12">
    <!-- Links -->
    <h6 class="text-uppercase fw-bold">community</h6>
      <hr class="mb-4 mt-0 d-inline-block mx-auto"style="width: 60px; background-color: #ffed00; height: 2px"/>
        <p><a href="#!">search properties</a></p>
          <p><a href="#!">for agents</a></p>
        <p><a href="#!">reviews</a></p>
      <p><a href="#!">FAQs</a></p>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-3 col-md-3 col-sm-12"> 
    <!-- Links -->
    <h6 class="text-uppercase fw-bold">Useful links</h6>
      <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #ffed00; height: 2px"/>
        <p><a href="#!">privacy policy</a></p>
          <p><a href="#!">terms</a></p>
        <p><a href="#!">Shipping Rates</a></p>
      <p><a href="#!">Help</a></p>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-3 col-md-3 col-sm-12">
    <!-- Links -->
    <h6 class="text-uppercase fw-bold">Contact</h6>
      <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #ffed00; height: 2px"/>
        <p><i class="fa fa-home" aria-hidden="true me-2"></i> ED-117, Tagore Garden,New Delhi & B3, Shopping Center, Tagore Garden</p>
        <p><i class="fa fa-clock-o" aria-hidden="true me-2"></i> 9am to 8:30pm
    </p>
          <p style="text-transform: inherit;"><i class="fa fa-envelope" aria-hidden="true me-2"></i><a href="mailto:info@nagpalproperties.co.in"> info@nagpalproperties.co.in</a></p>
        <p><i class="fa fa-phone" aria-hidden="true me-2"></i><a href="tel:9810365066"> +91-9810365066</a>,<a href="tel:9810053025"> +91-9810053025</a></p>
    </div>
    <!-- Grid column -->
    </div>
    <!-- Grid row -->
    </div>
    </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 pull-left">
          <div class="" style="background-color: rgba(0, 0, 0, 0.2);font-size: 13px;">© 2022 Copyright |
              <a class="text-white" href="{{ url('home') }}">Nagpalproperties.co.in</a>
          </div>
        </div>
        <div class="col-md-6 pull-right">
          <h6 style="float: right; color: rgb(255, 255, 255); font-weight: 400;font-size: 13px;">Developed and Maintained by : <a style="color: #ffed00;" target="_blank" href="https://solarman.in/" title="Solarman Engineering Project (P) Ltd.">Solarman Engineering Project (P) Ltd.</a></h6>
        </div>
      </div>
    </div>
    <!-- Copyright -->
    </footer>
    @stack('scripts')
    <!-- Footer -->
    <!-- End of .container -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity=" sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('public/js/app_usr.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">  
    </script> 
  </body>
</html>