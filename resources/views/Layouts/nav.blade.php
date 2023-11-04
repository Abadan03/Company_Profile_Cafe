@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-lg fixed-top @if($currentRouteName != 'home') bg-white text-black @endif">
    <div class="container-fluid mx-lg-5">
        <button>Logo</button>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link @if($currentRouteName == 'home') text-white @elseif ($currentRouteName != 'home') text-black @endif" href="{{ route('home')}}">Home</a>
                <a class="nav-link @if($currentRouteName == 'alamat') text-black active @elseif ($currentRouteName != 'home') text-black @endif" href="{{ route('alamat') }}" href="#">Alamat & Kontak</a>
                <a class="nav-link @if($currentRouteName == 'promo') text-black active @elseif ($currentRouteName != 'home') text-black @endif" href="{{ route('promo') }}" href="#">Promo</a>
                <a class="nav-link @if($currentRouteName == '') text-white @elseif ($currentRouteName != 'home') text-black @endif" href="{{ route('home') }}" href="#">Reservasi</a>
                <button class="ms-4 mb-3 mb-lg-0">Button</button>
            </div>
        </div>
    </div>
</nav>


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
