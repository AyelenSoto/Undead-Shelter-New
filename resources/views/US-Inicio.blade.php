<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=fondo>
    <div>
        <div class="contenedor2 margen2">
            <h1>Contenido Principal</h1>
            <p>Este es el contenido de tu página.</p>

            <aside class="barralateral">
                <a href="#Inicio" class="barralateral-btn botontexto2">Inicio</a>
                <a href="#Nosotros" class="barralateral-btn botontexto2">Nosotros</a>
                <a href="#Servicios" class="barralateral-btn botontexto2">Servicios</a>
                <a href="#Preparados" class="barralateral-btn botontexto2">Situación</a>
                <a href="#Seccion-formularios" class="barralateral-btn botontexto2">Registro/Login</a>
                <a href="#Redes" class="barralateral-btn botontexto2">Redes Sociales</a>
            </aside>
        </div>
        <img id="Inicio" src="{{ asset('images/FondoInicio.png') }}" alt="ImagenFondo" class="imagen">
        <div class="sobreponer">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="titulo">
            <a href="#Servicios" class="botontexto botoninicio">Conoce más</a>
            <h2 class="texto-habilitado">Undead Shelter BETA 0.1 now available on Tecsup</h2>
        </div>

        <div id="Nosotros" class="relative">
            <div class="separador"></div>
            <h1 class="subtitulosoposicion subtitulos">¿Quiénes somos?</h1>
            <div class="separador"></div>
            <p class="texto tamañotexto">Somos un grupo de programadores que logró reactivar lo básico de la red.<br>
                Creamos Undead Shelter para compartir puntos de víveres,<br> 
                rutas seguras y guías simples que ayuden a cualquier superviviente<br>
                que aún permanezca ahí afuera.<br>
                En este mundo roto, cada información cuenta.</p> <br>
        </div> 

        <div id="Servicios">
            <div class="separador"></div>
            <h1 class="subtitulosoposicion subtitulos">Nuestros Servicios</h1>
            <div class="separador"></div>
            <div class="contenedor">
                <div class="item-cuadrado">
                    <div class="cuadrado">
                        <i class="bi bi-shop icono"></i>
                    </div>
                    <h3>Centros de Recursos</h3>
                </div>
                <div class="item-cuadrado">
                    <div class="cuadrado">
                        <i class="bi bi-capsule-pill icono"></i>
                    </div>
                    <h3>Botiquines y Salud</h3>
                </div>
                <div class="item-cuadrado">
                    <div class="cuadrado">
                        <i class="bi bi-geo-alt icono"></i>
                    </div>
                    <h3>Refugios</h3>
                </div>
                <div class="item-cuadrado">
                    <div class="cuadrado">
                        <i class="bi bi-journals icono"></i>
                    </div>
                    <h3>Guías y Herramientas</h3>
                </div>
            </div>
        </div> 
        
        <div id="Preparados">
            <div class="separador"></div>
            <h1 class="subtitulosoposicion subtitulos">Preparados para lo Inesperado</h1>
            <div class="separador"></div>
            <p class="texto tamañotexto-2">Vivimos en un mundo donde los desastres naturales, las epidemias y las fallas en los servicios esenciales 
                pueden ocurrir sin aviso. Por eso, estar informados y preparados se ha convertido en una necesidad, 
                no en una elección.<br><br>
                Nuestro objetivo es proporcionar recursos, consejos y guías prácticas para ayudarte 
                a mantener la calma y tomar decisiones seguras ante cualquier emergencia.</p>
            <img src="{{ asset('images/Planeta.png') }}" alt="planeta" class="imagenderecha">
        </div> 

        <div id="Seccion-formularios">
            <div class="separador"></div>
            <h1 class="subtitulosoposicion subtitulos">Sobrevivientes</h1>
            <div class="separador"></div>
            <div class="seccion-formularios">
            <div class="contenedorform ">

                <form id="InicioSesion"method="POST" action="{{ route('login') }}" class="formulario-moderno">
                    @csrf
                    @if (session('error'))
                        <div id="loginerror" class="btnerror">
                            {{ session('error') }}
                        </div>
                    @endif
                
                    <h2 class="titulo-form">Iniciar Sesión</h2>

                    <div class="form-group">
                        <label for="login-email">Correo Electrónico</label>
                        <input type="email" id="login-email" name="email" placeholder="correo@ejemplo.com" required>
                    </div>

                    <div class="form-group">
                        <label for="login-password">Contraseña</label>
                        <input type="password" id="login-password" name="password" placeholder="Tu contraseña" required>
                    </div>
                        <button type="submit" class="btn-moderno">Entrar</button>
                        <p class="texto-ayuda">¿Olvidaste tu contraseña?</p>
                </form>

           
                <form method="POST" action="{{ route('registrar') }}" class="formulario-moderno">
                    @csrf
                    <h2 class="titulo-form">Crear Cuenta</h2>

                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>

                    </div>

                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" placeholder="correo@ejemplo.com" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" placeholder="Mínimo 8 caracteres" required minlength="8">
                    </div>

                    <div class="form-group">
                        <label for="ubicacion">Ubicación Actual</label>
                        <input type="text" id="ubicacion" name="ubicacion" placeholder="Ciudad o zona segura">
                    </div>

                    <div class="form-check-custom">
                        <input type="checkbox" id="terminos" name="terminos" required>
                        <label for="terminos">Acepto compartir mi ubicación</label>
                    </div>
                        <button type="submit" class="btn-moderno">Registrarse</button>
                </form>
            </div>
            </div>
        </div>
        <div id="Redes">
            <div class="separador"></div>
            <h1 class="subtitulosoposicion subtitulos">Redes Sociales</h1>
            <div class="separador"></div>
        </div>
    
        
    </div>
</body>
</html> 