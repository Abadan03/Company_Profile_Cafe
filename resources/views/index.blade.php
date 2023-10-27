@extends('layouts.layout')
@section('content')

 <!-- Hero -->
  <div id="hero" class="container-fluid d-flex flex-column text-white text-center align-items-center justify-content-center" >
    <img class="img-fluid" width="10%" src="{{ url('assets/img/logo.png') }}" alt="">
    <h1 class="fw-bold" style="font-size: 60px">Dapur Prasmanan</h1>
    <p class="w-50 fw-medium">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum expedita, at corrupti repellat libero reprehenderit provident illum dicta voluptas mollitia natus deserunt eligendi ea alias, quis molestias blanditiis vero minima!</p>
    <button class="btn btn-light my-3 px-5">Button</button>
  </div>
<!-- Hero End -->


{{-- About US --}}
  <div id="about" class="text-center">
    <div class="mb-5">
      <h1>Tentang Kami</h1>
      <hr class="d-flex justify-content-center text-center" style="border: 3px solid black; opacity: 1; width: 10%; margin: 0 auto;">
    </div>
    <div class="d-flex m-auto mt-5" style="width: 90%">
      <div class="w-50">
        <img width="80%" src="{{ url('assets/img/hero-2.png') }}" alt="">
      </div>
      <div class="w-50 text-start ms-3 d-flex flex-column">
        <h1 class="fw-semibold">Lorem ipsum dolor sit amet,<br> consectetur </h1>
        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      </div>
    </div>
  </div>

  {{-- About us End --}}

  {{-- Gallery --}}
  <div class="photo-gallery py-5" style="background-color: orange">
      <div class="container">
        <div class="text-center mb-5 text-white">
            <h1>Galeri</h1>
            <hr class="d-flex justify-content-center text-center" style="border: 3px solid white; opacity: 1; width: 10%; margin: 0 auto;">
        </div>
        <div class="row col-12 m-auto" style="width: 90%">
            <div class="text-center py-3 col-md-6 col-lg-4"><img class="img-fluid" src="{{ url('assets/img/grid1.png') }}"></div>
            <div class="text-center py-3 col-md-6 col-lg-4"><img class="img-fluid" src="{{ url('assets/img/grid2.png') }}"></div>
            <div class="text-center py-3 col-md-6 col-lg-4"><img class="img-fluid" src="{{ url('assets/img/grid3.png') }}"></div>
            <div class="text-center py-3 col-md-6 col-lg-4"><img class="img-fluid" src="{{ url('assets/img/grid4.png') }}"></div>
            <div class="text-center py-3 col-md-6 col-lg-4"><img class="img-fluid" src="{{ url('assets/img/grid5.png') }}"></div>
            <div class="text-center py-3 col-md-6 col-lg-4"><img class="img-fluid" src="{{ url('assets/img/grid6.png') }}"></div>
            <div class="text-center py-3 col-md-6 col-lg-4"><img class="img-fluid" src="{{ url('assets/img/grid7.png') }}"></div>
            <div class="text-center py-3 col-md-6 col-lg-4"><img class="img-fluid" src="{{ url('assets/img/grid8.png') }}"></div>
            <div class="text-center py-3 col-md-6 col-lg-4"><img class="img-fluid" src="{{ url('assets/img/grid9.png') }}"></div>
        </div>
      </div>
  </div>
  {{-- Gallery End --}}

  {{-- Berita --}}
  <div class="py-5 my-5">
    <div class="container text-center">
        <div class="text-center mb-5">
            <h1>Berita & Promo</h1>
            <hr class="d-flex justify-content-center text-center" style="border: 3px solid black; opacity: 1; width: 10%; margin: 0 auto;">
        </div>
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-around m-auto">
            <div class="card border-0" style="width: 18rem;">
                <img src="{{ url('assets/img/grid1.png') }}" class="card-img-top" alt="...">
                <a class="mt-2 text-decoration-none text-black fs-3 fw-medium" href="">BERITA 1</a>
            </div>
            <div class="card border-0" style="width: 18rem;">
                <img src="{{ url('assets/img/grid1.png') }}" class="card-img-top" alt="...">
                <a class="mt-2 text-decoration-none text-black fs-3 fw-medium" href="">BERITA 1</a>
            </div>
            <div class="card border-0" style="width: 18rem;">
              <a href="">
                <img src="{{ url('assets/img/grid1.png') }}" class="card-img-top" alt="...">
                <a class="mt-2 text-decoration-none text-black fs-3 fw-medium" href="">BERITA 1</a>
              </a>
            </div>
        </div>
    </div>
  </div>
  {{-- Berita End --}}

  <script>
    window.addEventListener("scroll", function() {
        let navbar = document.querySelector(".navbar");
        if (window.scrollY > 0) {
            navbar.classList.add("navbar-scroll");
        } else {
            navbar.classList.remove("navbar-scroll");
        }
    });

  </script>
@endsection
