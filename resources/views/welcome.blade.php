<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>VroomVista</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/CAR4U.png" rel="" />
  <link href="assets/img/CAR4U.png" rel="" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />


  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: EstateAgency
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body style="background-color: #f3f3f3;">
  <!-- Topbar Start -->
  <div class="container-fluid sticky-top px-0">
    <div class="container-fluid topbar bg-secondary d-none d-lg-block">
      <div class="container px-0">
        <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
          <div class="top-info flex-grow-0">
            <span class="rounded-circle btn-sm-square bg-primary me-2">
              <i class="fas fa-bolt text-white"></i>
            </span>
            <div class="pe-2 me-3 border-end border-white d-flex align-items-center">
              <p class="mb-0 text-white fs-6 fw-normal">Promo</p>
            </div>
            <div class="overflow-hidden" style="width: 735px;">
              <div id="note" class="ps-2">
                <!-- <img src="img/features-fashion.jpg" class="img-fluid rounded-circle border border-3 border-primary me-2" style="width: 30px; height: 30px;" alt=""> -->
                <i class="fas fa-tags" style="width: 30px; height: 18px;"></i>
                <a href="#">
                  <p class="text-light mb-0 link-hover">Toyota Rush is now 10% discount until April 30</p>
                </a>
              </div>
            </div>
          </div>
          <div class="top-link flex-lg-wrap">
            <i class="fas fa-calendar-alt text-white border-end border-secondary pe-2 me-2"> <span class="text-body" id="currentDate"></span></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-light navbar-expand-lg">
    <div class="container">
      <!-- Navbar Brand -->
      <a class="navbar-brand text-brand" href="index.html">Vroom<span class="color-b">Vista</span></a>
      <!-- Navbar Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- Navbar Collapse -->
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <!-- Navigation Links -->

          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('vehicles') }}">Cars</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dealers') }}">Dealers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('caradmin') }}">AutoStore</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin') }}">Admin</a>
          </li>
        </ul>
      </div>

      <!-- Login Form and Dealers Link in the Same Container -->
      <div class="d-flex justify-content-evenly">
        @guest

        <a href="{{ route('login') }}" class="btn btn-outline-secondary">
          Login
        </a>

        @else

        <!-- User is logged in -->
        <a href="{{ route('logout') }}" class="btn btn-outline-secondary" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
          Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        @endguest
        <!-- End of Login Form and Dealers Link Container -->
      </div>
  </nav>
  <!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">
    <div class="swiper-wrapper">
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/cars/c1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Start Your Journey:</span> <br />
                      Where Quality Meets Adventure.
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Find Your Dream Ride Today! </span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/cars/c2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Chart Your Course: </span> <br />
                      Where Excellence Drives Every Mile.
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Discover Your Perfect Vehicle!</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/cars/tesla1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Navigate Your Dreams: </span> <br />
                      Where Innovation Lead the Way.
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a"> Your Ideal Car Awaits!</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <!-- End Intro Section -->

  <main id="main">
    <!-- Services Start -->
    <section class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <h1 class="text-center"><span class="text-dark">Featured</span> <span class="color-b">Services</span></h1>
          <div class="col-lg-6 pt-4" style="min-height: 400px;">
            <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
              <img class="position-absolute img-fluid w-100 h-100" src="assets/img/s1.jpg" style="object-fit: cover;" alt="">
              <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                <h1 class="display-4 text-white mb-0">0%
                </h1>
                <h4 class="text-white">Installment</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h4 class="text-uppercase">0% INSTALLMENT</h4>
            <p class="mb-4">
              Enjoy 0% Installment up to 6 months* using your Toyota Mastercard or other Metrobank Credit Card when you avail of General Repair or Body & Paint services at any Authorized Toyota Dealer nationwide. *Terms and Conditions apply</p>
            <div class="row g-4 mb-3 pb-3">
              <div class="col-12 wow fadeIn move-right" data-wow-delay="0.1s">
                <div class="d-flex">
                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                    <!-- <span class="fw-bold text-secondary">01</span> -->
                    <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                  </div>
                  <div class="ps-3">
                    <h6>VroomVista Express Maintenance</h6>
                    <span>Offers swift and efficient services to keep your vehicles in optimal condition, ensuring a hassle-free and timely experience for routine upkeep.</span>
                  </div>
                </div>
              </div>
              <div class="col-12 wow fadeIn move-right" data-wow-delay="0.3s">
                <div class="d-flex">
                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                    <!-- <span class="fw-bold text-secondary">02</span> -->
                    <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                  </div>
                  <div class="ps-3">
                    <h6>VroomVista Air Care</h6>
                    <span>Provides comprehensive air quality solutions, ensuring clean and healthy indoor environments.</span>
                  </div>
                </div>
              </div>
              <div class="col-12 wow fadeIn move-right" data-wow-delay="0.5s">
                <div class="d-flex">
                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                    <!-- <span class="fw-bold text-secondary">03</span> -->
                    <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                  </div>
                  <div class="ps-3">
                    <h6>VroomVista Smile</h6>
                    <span>Specializes in enhancing your car's appearance and performance, delivering top-notch detailing and maintenance services.</span>
                  </div>
                </div>
              </div>
            </div>
            <a href="" class="btn btn-secondary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Services End -->

    <!-- Featured Cars Start -->
    <section>
      <div>
        <h1 class="text-center mt-5"><span class="text-dark">Featured</span> <span class="color-b">Cars</span></h1>
      </div>
      <div class="container-fluid bg-white bg-image">
        <div class="container py-5">
          <div class="row justify-content-center g-4 mt-3">
            @foreach($cars as $car)
            <div class="col-lg-3 mt-3 card p-0 me-4 image-box">
              <img src="{{ asset('storage/carscontainer/' . $car->image) }}" height="200px" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h6 class="card-title color-b">{{$car->model_name}}</h6>
                <hr>
                <span class="float-start">{{$car->body_style}}</span> <span class="float-end">{{$car->brand_name}}</span>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>


    <!-- Featured Cars End -->


    <!-- Featured Dealers -->
    <!-- Featured Cars Start -->
    <section>
      <div>
        <h1 class="text-center mt-5"><span class="text-dark">Featured</span> <span class="color-b">Dealers</span></h1>
      </div>
      <div class="container-fluid bg-white bg-image">
        <div class="container py-5">
          <div class="row justify-content-center g-4 mt-3">
            @foreach($users as $user)
            <div class="col-lg-3 mt-3 card p-0 me-4 image-box">
              <img src="{{ asset('storage/dealercontainer/' . $user->image) }}" height="350px" width="400px" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h6 class="card-title color-b mt-2">{{$user->name}}</h6>
                <hr>
                <span class="float-start"><strong>Email:</strong> {{$user->email}}</span>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>



  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="copyright-footer">
      <p class="copyright color-text-a">
        &copy; Copyright
        <span class="color-a">VroomVista</span> All Rights Reserved.
      </p>
    </div>
  </footer>
  <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>