<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waroeng Prasmanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    {{-- CSS dan Bootstrap 5 --}}
    @vite('resources/sass/app.scss')

    {{-- Lightbox --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent mt-3 color-hero">
        <div class="container">
          <a class="btn btn-light" href="#"
            >Logo</a>
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center">
              <li class="nav-item">
                <a class="nav-link mx-2" href="#!">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="#!">Alamat & Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="#!">Promosi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="#!">Reservasi</a>
              </li>
              <li class="nav-item ms-3">
                <a class="btn btn-primary btn-rounded" href="#!">Button</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      

      {{-- Content --}}
      @yield('content')


      {{-- Footer --}}
      {{-- <footer class="align-items-center p-5">
        <div class="container d-flex justify-content-between" style="height: ">
          <div class="d-grid align-items-center w-100" style="height: 0">
            
              <div>
                  <h5>
                    Hubungi kami untuk Reservasi :
                  </h5>
                  <h6>
                    +62 89614138080
                  </h6>
              </div>
              <div>
                <h5>
                  Jam Buka :
                </h5>
                <h6>Setiap Hari</h6>
                <h6>10.00 - 21.00</h6>
              </div>
          </div>
          <div class="d-grid  text-start justify-content- pb-5" style="margin: 0; height">
            <h5>Lokasi :</h5>
            <h6>Jl. Dagopojok AF No.89, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 41035</h6>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3956.5996540226943!2d112.57645037500103!3d-7.398674992611273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMjMnNTUuMiJTIDExMsKwMzQnNDQuNSJF!5e0!3m2!1sen!2sid!4v1698175770115!5m2!1sen!2sid" width="550" height="250" style="border:0;" class="" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </footer> --}}
      <footer class="p-5 bg-light">
        <div class="container d-md-flex justify-content-between align-items-center">
            <div class="d-grid align-items-center text-center text-md-start mb-3 mb-md-0">
                <!-- Reservasi Section -->
                <div>
                    <h5>Hubungi kami untuk Reservasi :</h5>
                    <h6>+62 89614138080</h6>
                </div>
                <div>
                    <h5>Jam Buka :</h5>
                    <h6>Setiap Hari</h6>
                    <h6>10.00 - 21.00</h6>
                </div>
            </div>
            <div class="d-grid text-start">
                <h5>Lokasi :</h5>
                <h6>Jl. Dagopojok AF No.89, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 41035</h6>
                <!-- Google Maps -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3956.5996540226943!2d112.57645037500103!3d-7.398674992611273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMjMnNTUuMiJTIDExMsKwMzQnNDQuNSJF!5e0!3m2!1sen!2sid!4v1698175770115!5m2!1sen!2sid" 
                            width="550" height="250" style="border:0;" class="embed-responsive-item" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </footer>
    {{-- Footer End --}}
    
     
      {{-- test --}}
      {{-- @include('footer') --}}

    <!-- CDN Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- Lightbox --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>