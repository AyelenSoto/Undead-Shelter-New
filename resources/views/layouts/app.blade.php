<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('css/US-barra.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- NECESARIO PARA QUE TU VISTA PUEDA AÑADIR CSS -->
  @stack('styles')
</head>
<body class="fondo2">
  @include('components.US-barra')
  <div>
    @if (session('success'))         
        <div class="btninicio">
         {{ session('success') }}
        </div>
    @endif


  </div>

  <div>
    @yield('content')
  </div>

  <!-- NECESARIO PARA QUE TU VISTA PUEDA CARGAR SCRIPTS -->
  @yield('scripts')

</body>
</html>
