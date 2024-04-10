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

<body style="background-color: #faf3f3;">
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
            <!-- <div class="d-flex icon">
                            <p class="mb-0 text-white me-2">Follow Us:</p>
                            <a href="" class="me-2"><i class="fab fa-facebook-f text-body link-hover"></i></a>
                            <a href="" class="me-2"><i class="fab fa-twitter text-body link-hover"></i></a>
                            <a href="" class="me-2"><i class="fab fa-instagram text-body link-hover"></i></a>
                            <a href="" class="me-2"><i class="fab fa-youtube text-body link-hover"></i></a>
                            <a href="" class="me-2"><i class="fab fa-linkedin-in text-body link-hover"></i></a>
                            <a href="" class="me-2"><i class="fab fa-skype text-body link-hover"></i></a>
                            <a href="" class=""><i class="fab fa-pinterest-p text-body link-hover"></i></a>
                        </div> -->
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







  @yield('contents')








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
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>



  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>