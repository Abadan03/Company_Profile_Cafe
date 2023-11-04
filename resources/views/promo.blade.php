@extends('layouts.layout')
@section('content')
<div style="height: 47px"></div>
<div id="promo" class="d-flex flex-column justify-content-center align-items-center min-vw-100 promo">
    {{-- Corousel 1 --}}
    <div class="container-fluid m-auto bg-white d-md-flex d-sm-grid align-items-center promo-caraousel" style="width: 964px">
        <div id="slider" class="carousel m-auto slide w-100 carousel_img" data-bs-touch="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ url('assets/img/grid1.png') }}" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ url('assets/img/grid2.png') }}" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ url('assets/img/grid3.png') }}" class="d-block w-100 img-fluid" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="w-100 p-5 description_carousel">
            <h2>PROMO MERDEKA!</h2>
            <p>Ada promo buat kamu nih, mau kan?
                Caranya gampang banget, kamu bisa beli Ayam Goreng Legit dan Gurami Goreng kamu akan mendapatkan Free Kerang Pedas Manis / Asam Manis.</p>
            <p>Dan untuk Suki and Grill kamu bisa beli Yaki 2 dan Suki 1 / Yaki 1, akan mendapatkan Free dimsum...</p>
            <p>Catat ya, promo berlaku: <br>
                - Khusus Dine in <br>
                - Mulai tanggal 10-31 Agustus 2023 <br>
                - Berlaku di Dapur Prasmanan and The Patio
            </p>
        </div>
    </div>

    {{-- Corousel 2 --}}
    <div class="container-fluid m-auto bg-white d-md-flex d-sm-grid mt-5 align-items-center promo-caraousel" style="width: 964px">
        <div id="slider2" class="carousel m-auto slide w-100 carousel_img" data-bs-touch="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ url('assets/img/grid1.png') }}" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ url('assets/img/grid2.png') }}" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ url('assets/img/grid3.png') }}" class="d-block w-100 img-fluid" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#slider2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slider2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="w-100 p-5 description_carousel">
            <h2>PROMO MERDEKA!</h2>
            <p>Ada promo buat kamu nih, mau kan?
                Caranya gampang banget, kamu bisa beli Ayam Goreng Legit dan Gurami Goreng kamu akan mendapatkan Free Kerang Pedas Manis / Asam Manis.</p>
            <p>Dan untuk Suki and Grill kamu bisa beli Yaki 2 dan Suki 1 / Yaki 1, akan mendapatkan Free dimsum...</p>
            <p>Catat ya, promo berlaku: <br>
                - Khusus Dine in <br>
                - Mulai tanggal 10-31 Agustus 2023 <br>
                - Berlaku di Dapur Prasmanan and The Patio
            </p>
        </div>
    </div>
</div>
@endsection
