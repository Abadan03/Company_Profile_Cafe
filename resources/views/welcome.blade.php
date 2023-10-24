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

      <!-- Hero -->
      <div class="text-white container d-flex flex-column text-center align-items-center justify-content-center" >
        <!-- <img src="../images/Bg.png" alt=""> -->
        <p class=" fw-bold" style="font-size: 60px;">Dapur Prasmanan</p>
        <p class="w-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum expedita, at corrupti repellat libero reprehenderit provident illum dicta voluptas mollitia natus deserunt eligendi ea alias, quis molestias blanditiis vero minima!</p>
        <button class="btn btn-light" style="padding-left: 40px; padding-right: 40px;">Button</button>
      </div>


    <!-- CDN Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>