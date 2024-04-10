@extends('layout.app')



@section('contents')

<main id="main">
  <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 p-0" style="background-image: url(assets/img/cars-bg.jpg);">
    <div class="container-fluid page-header-inner py-5">
      <div class="container text-center">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Car Listing</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center text-uppercase">
            <li class="breadcrumb-item"><a class="text-secondary" href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Cars</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>

  <!-- Page Header End -->



  <!-- Cars Shop Start-->
  <section>
    <div class="container-fluid fruite py-5">
      <div class="container py-3">
        <div class="col-lg-12 text-center mb-5">
          <h1>VroomVista's Car Dealers</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
          @foreach($cars as $car)
          <div class="col mb-4">
            <div class="rounded position-relative fruite-item">
              <div class="fruite-img">
                <img src="{{ asset('storage/carscontainer/' . $car->image) }}" class="img-fluid w-100 rounded-top common-image mx-auto d-block" alt="">
              </div>
              <div class="text-light bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">{{$car->model_name}}</div>
              <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                <h4>{{$car->brand_name}}</h4>
                <hr>
                <p class="text-dark">Unbeatable Deals on Wheels!</p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                  <p class="text-dark fs-5 fw-bold mb-1">${{$car->price}}</p>
                  <a href="{{route('cardetail',['id' => $car->inventory_id])}}" class="btn border border-secondary rounded-pill px-1 text-secondary">
                    <i class="fa fa-shopping-bag me-1 text-secondary"></i> View Car</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End Property Grid Single-->
</main>
<!-- End #main -->


@endsection