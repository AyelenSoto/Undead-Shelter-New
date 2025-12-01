<div class="sidebar">
        <img src="{{ asset('images/LogoBarra.png') }}" alt="Logo" style="width: 190px; display: block; margin: 0 auto 30px;">
        <a href="{{ route('home') }}">
            <button class="sidebar-btn d-flex align-items-center">
            <i class="bi bi-houses" style="margin-right: 10px;"></i>
            Home
            </button>
        </a>
        <div class="separador2"></div>
        <a href="{{ route('centro-recursos') }}">
            <button class="sidebar-btn d-flex align-items-center">
            <i class="bi bi-box-seam" style="margin-right: 10px;"></i>
            Recursos
            </button>
        </a>
        <div class="separador2"></div>
        <a href="{{ route('salud') }}">
            <button class="sidebar-btn d-flex align-items-center">
            <i class="bi bi-heart-pulse" style="margin-right: 10px;"></i>
            Salud
            </button>
        </a>
        <div class="separador2"></div>
        <a href="{{ route('refugios') }}">
            <button class="sidebar-btn d-flex align-items-center">
            <i class="bi bi-house" style="margin-right: 10px;"></i>
            Refugios
            </button>
        </a>
       <div class="separador2"></div>
        <a href="{{ route('guias') }}">
            <button class="sidebar-btn d-flex align-items-center">
            <i class="bi bi-book" style="margin-right: 10px;"></i>
            Guias
           </button>
        </a>
        <div class="separador2"></div>
    <div>
        @if(Auth::check())
        <div class="sidebar-user">
            <img src="{{ asset('images/user.png') }}" alt="Usuario">
            <span class="sidebar-username">Hola, {{ Auth::user()->nombre }}!</span>
        </div>
        @endif

    </div>
    <div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btnbarra">Cerrar sesión</button>
        </form>
    </div>
  </div>