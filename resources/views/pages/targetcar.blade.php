@extends('layout.app')

@section('contents')


<main id="main">
  <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 p-0" style="background-image: url(assets/img/cars-bg.jpg);">
    <div class="container-fluid page-header-inner py-5">
      <div class="container text-center">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Car Detail</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center text-uppercase">
            <li class="breadcrumb-item"><a class="text-secondary" href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item " aria-current="page"><a class="text-white active" href="{{route('vehicles')}}">Cars</a></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>

  <!-- Page Header End -->


  <!-- =======  Car Detail ======= -->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div id="property-single-carousel" class="swiper">
            <div class="swiper-wrapper">
              <div>
                <img width="550px" height="500px" src="{{ asset('storage/carscontainer/' . $car->image) }}" alt="" />
              </div>
            </div>
          </div>
          <div></div>
        </div>

        <div class="col-lg-4">
          <div class="property-summary justify-content-evenly">
            <div class="row">
              <div class="col-sm-12">
                <div class="title-box-d section-t4">
                  <h3 class="title-d">Summary Specification</h3>
                </div>
              </div>
            </div>
            <div class="summary-list">
              <ul class="list">
                <li class="d-flex justify-content-between">
                  <strong>Vehicle:</strong>
                  {{$car->model_name}}
                </li>
                <li class="d-flex justify-content-between">
                  <strong>VIN:</strong>
                  {{$car->vin}}
                </li>
                <li class="d-flex justify-content-between">
                  <strong>Brand:</strong>
                  {{$car->brand_name}}
                </li>
                <li class="d-flex justify-content-between">
                  <strong>Model:</strong>
                  {{$car->model_name}}
                </li>
                <li class="d-flex justify-content-between">
                  <strong>Color:</strong>
                  {{$car->color}}
                </li>
                <li class="d-flex justify-content-between">
                  <strong>Transmission:</strong>
                  {{$car->transmission}}
                </li>
              </ul>
            </div>
            <div class="property-price d-flex justify-content-evenly">
              <div class="card-header-c d-flex">
                <div class="card-title-c align-self-center">
                  <h5 class="title-c">Price: ${{$car->price}}</h5>
                </div>
              </div>
            </div>
            <a class="btn btn-outline-dark" href="{{ route('customer',['id' => $car->inventory_id]) }}">
              <i class="bi-cart-fill me-1"></i>
              Buy
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Car Detail-->
</main>

@endsection