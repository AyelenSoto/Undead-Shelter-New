<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="fondo2 ">
    <div>
        @if (session('success'))         
            <div  class="btninicio">
             {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="sidebar">
        <h2>Menú</h2>
        <button class="sidebar-btn active">Inicio</button>
        <button class="sidebar-btn">Productos</button>
        <button class="sidebar-btn">Servicios</button>
        <button class="sidebar-btn">Contacto</button>
        <button class="sidebar-btn">Perfil</button>
    <div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-moderno">Cerrar sesión</button>
        </form>
    </div>
  </div>


</body>
</html>