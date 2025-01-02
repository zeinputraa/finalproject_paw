@php
$currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-dark custom-green fixed-top">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i>Ruang Dengar</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}"
                        class="nav-link @if($currentRouteName == 'home') active @endif">Tanya Dokter</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('consultation.index')}}"
                        class="nav-link @if($currentRouteName == 'consultation.index') active @endif">Data Dokter</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('pasien.index')}}"
                        class="nav-link @if($currentRouteName == 'pasien.index') active @endif">Data Pasien</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('jadwal.index')}}"
                        class="nav-link @if($currentRouteName == 'jadwal.index') active @endif">Jadwal Konsultasi</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('payment.index')}}"
                        class="nav-link @if($currentRouteName == 'payment.index') active @endif"
                        class="nav-link">Payment</a></li>
            </ul>
            <hr class="d-md-none text-white-50">
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="" class="dropdown-item"><i class="bi-person-circle me-1"></i> My Profile</a>
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="bi bi-lock-fill"></i>
                                {{ __('Logout') }}
                                </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
