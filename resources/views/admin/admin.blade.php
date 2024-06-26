@extends('layout.app')

@section('contents')


<div class="container-fluid d-flex justify-content-center align-items-center vh-100 bg-light" style="background-image: url(assets/img/cars-bg.jpg); background-size: cover; background-position: center;">
  <div class="p-4 bg-light rounded">
    <form action="{{route('registerDealear')}}" method="POST" enctype="multipart/form-data">

      @csrf


      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
      </div>

      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="password">
      </div>

      <div class="mb-3">
        <label for="formFile" class="form-label">Dealer Image</label>
        <input name="image" class="form-control" type="file" id="formFile">
      </div>


      <button type="submit" class="btn btn-secondary w-full mt-5">Submit</button>

    </form>

  </div>
</div>
@endsection