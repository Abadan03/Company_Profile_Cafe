@extends('layouts.defaults')
@section('content')

 <!-- Hero -->
  <div class="text-white container d-flex flex-column text-center align-items-center justify-content-center" >
    <!-- <img src="../images/Bg.png" alt=""> -->
    <p class=" fw-bold" style="font-size: 60px;">Dapur Prasmanan</p>
    <p class="w-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum expedita, at corrupti repellat libero reprehenderit provident illum dicta voluptas mollitia natus deserunt eligendi ea alias, quis molestias blanditiis vero minima!</p>
    <button class="btn btn-light" style="padding-left: 40px; padding-right: 40px;">Button</button>
  </div>
  <!-- Hero End -->

  {{-- About us --}}
  {{-- <div class="text-center container d-grid justify-content-center align-items-center" style="height: 100vh; margin-top: ">
    <div>
      <h1>Tentang Kami</h1>
      <hr class="d-flex justify-content-center text-center" style="border: 3px solid black; opacity: 1; width: 60%">
    </div>
    <div></div>
  </div> --}}
  <div class="text-center container d-grid justify-content-center align-items-center w-75 my-5" style="">
    <div>
      <h1>Tentang Kami</h1>
      <hr class="d-flex justify-content-center text-center" style="border: 3px solid black; opacity: 1; width: 15%; margin: 0 auto;">
    </div>
    <div class="d-flex justify-content-center align-items-center" style="gap: 120px;">
      <div>
        <img src="{{ url('assets/img/hero-2.png') }}" alt="">
      </div>
      <div class="d-grid text-start">
        <div class="">
          <h2 class="fw-semibold">Lorem ipsum dolor sit amet, consectetur </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
      </div>
    </div>
  </div>
  
  {{-- About us End --}}

  {{-- Gallery --}}
  <div class="photo-gallery p-5" style="background-color: orange">
      <div class="container">
          <div class="intro">
              <h2 class="text-center text-white">Gallery</h2>
              <hr>
              {{-- <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p> --}}
          </div>
          <div class="row photos">
              <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ url('assets/img/grid1.png') }}" data-lightbox="photos"><img class="img-fluid" src="{{ url('assets/img/grid1.png') }}"></a></div>
              <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ url('assets/img/grid2.png') }}" data-lightbox="photos"><img class="img-fluid" src="{{ url('assets/img/grid2.png') }}"></a></div>
              <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ url('assets/img/grid3.png') }}" data-lightbox="photos"><img class="img-fluid" src="{{ url('assets/img/grid3.png') }}"></a></div>
              <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ url('assets/img/grid4.png') }}" data-lightbox="photos"><img class="img-fluid" src="{{ url('assets/img/grid4.png') }}"></a></div>
              <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ url('assets/img/grid5.png') }}" data-lightbox="photos"><img class="img-fluid" src="{{ url('assets/img/grid5.png') }}"></a></div>
              <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ url('assets/img/grid6.png') }}" data-lightbox="photos"><img class="img-fluid" src="{{ url('assets/img/grid6.png') }}"></a></div>
              <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ url('assets/img/grid7.png') }}" data-lightbox="photos"><img class="img-fluid" src="{{ url('assets/img/grid7.png') }}"></a></div>
              <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ url('assets/img/grid8.png') }}" data-lightbox="photos"><img class="img-fluid" src="{{ url('assets/img/grid8.png') }}"></a></div>
          </div>
      </div>
  </div>
  {{-- Gallery End --}}

@endsection