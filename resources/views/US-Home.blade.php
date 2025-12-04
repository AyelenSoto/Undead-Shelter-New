@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="s-wrapper">
    <h1 class="titulo-recursos">Preparados para lo Imprevisto</h1>
    <div class="s-scroller">

        @foreach($imagenes as $img)
            <div class="s-item">
                <img src="{{ asset($img->imagen) }}" alt="{{ $img->titulo }}">
            </div>
        @endforeach
        @foreach($imagenes as $img)
            <div class="s-item">
                <img src="{{ asset($img->imagen) }}" alt="{{ $img->titulo }}">
            </div>
        @endforeach
    </div>
</div>
<p class="texto tamañotexto2">
    Bienvenido a Undead Shelter, tu refugio de información en un mundo incierto.
    Somos un grupo de programadores que logró reactivar lo básico de la red.
    Aquí compartimos puntos de víveres, rutas seguras y consejos que ayuden a cualquier superviviente<br>
    que aún permanezca ahí afuera.<br>
    En este mundo roto, cada información cuenta.
</p> <br>
{{-- APARTADO SOLO PARA ADMIN (POST ROJO OSCURO) --}}
@if(auth()->check() && auth()->id() === 1)
    <div class="admin-post-section mt-5 p-4 rounded shadow" style="background-color: #000000; color: #fff; border: 2px solid #ff0000ff;">
        <h2 class="vtitulo mb-3" style="color: #fff;">Publicación Especial del Admin</h2>
        <p class="subti mb-4">Este apartado es exclusivo para el administrador. Aquí puedes crear nuevas guías o consejos para todos los usuarios.</p>

        <form action="{{ route('posts.store') }}" method="POST" class="formgrupo">
            @csrf
            <div class="mb-3">
                <label for="titulo_admin" class="form-label">Título</label>
                <input type="text" name="titulo" id="titulo_admin" class="form-control" placeholder="Título de la publicación" required>
            </div>
            <div class="mb-3">
                <label for="contenido_admin" class="form-label">Contenido</label>
                <textarea name="contenido" id="contenido_admin" class="form-control" placeholder="Escribe aquí el contenido de la publicación" rows="5" required></textarea>
            </div>
            <button type="submit" class="btnpost mt-2">Crear Publicación</button>
        </form>
    </div>
@endif

{{-- LISTADO DE POSTS CREADOS POR EL ADMIN (VISUALIZACIÓN PARA TODOS LOS USUARIOS) --}}
<div class="admin-posts mt-4">
    <h2 class="vtitulo mb-3">Publicaciones Especiales del Admin</h2>

    @foreach($posts as $post)
        <div class="guia-card p-4 mb-4" style="background-color: #8B0000; color: #fff; border: 1px solid #5A0000;">
            <h3 class="guia-titulo">{{ $post->titulo }}</h3>
            <p>{{ $post->contenido }}</p>
            <p class="guia-autor">Publicado por <b>{{ $post->user->nombre }}</b> el {{ $post->created_at->format('d/m/Y H:i') }}</p>
            {{-- Usuarios normales NO ven botones de editar/eliminar --}}
        </div>
    @endforeach
</div>

<script>
        const scroller = document.querySelector('.s-scroller');
        const items = document.querySelectorAll('.s-item');
        
        let idx = 0;

        function next() {
            idx = (idx + 1) % items.length;
            scroller.scrollTo({
                left: items[idx].offsetLeft - 10,
                behavior: 'smooth'
            });
        }

        function prev() {
            idx = idx > 0 ? idx - 1 : items.length - 1;
            scroller.scrollTo({
                left: items[idx].offsetLeft - 10,
                behavior: 'smooth'
            });
        }

        // Auto-scroll cada 4 segundos para movimiento más fluido
        setInterval(next, 4000);
    </script>



@endsection
