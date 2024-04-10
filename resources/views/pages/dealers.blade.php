@extends('layout.app')

@section('contents')
<main id="main">
  <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 p-0" style="background-image: url(assets/img/cars-bg.jpg);">
    <div class="container-fluid page-header-inner py-5">
      <div class="container text-center">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Dealers</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center text-uppercase">
            <li class="breadcrumb-item"><a class="text-secondary" href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Dealers</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>

  <!-- Page Header End -->



  <!-- ======= Dealers ======= -->
  <section>
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1>VroomVista's Car Dealers</h1>
        </div>
      </div>
      <div class="row mt-3 justify-content-center">
        @foreach($users as $user)
        <div class="col-lg-4 col-md-6 col-sm-12 mt-3 mb-3">
          <div class="card p-0 image-box">
            <img src="{{ asset('storage/dealercontainer/' . $user->image) }}" class="card-img-top mx-auto d-block" height="400px" alt="..." style="object-fit: cover;">
            <div class="card-body text-center">
              <h6 class="card-title color-b mt-2">{{$user->name}}</h6>
              <hr>
              <span class="float-start"><strong>Email:</strong> {{$user->email}} </span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>




</main>
<!-- End #main -->

@endsection