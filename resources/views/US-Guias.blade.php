@extends('layouts.app')

@section('title', 'Recursos')

@section('content')
<div class=vbody>
    <h1 class="vtitulo">Guías y Consejos</h1>
    <p class="subti">Aquí encontrarás guías simples y prácticas para enfrentar situaciones difíciles. Puedes leerlas, compartirlas y dejar tus comentarios para ayudar a otros supervivientes.</p>
</div>
<div>
    <a href="#Publicacion" class="btnpost">Crear publicación +</a>
</div>
<div class="container vbody">

    {{-- LISTA DE PUBLICACIONES --}}
    <h2 class="vtitulo mb-3">Publicaciones recientes</h2>
@foreach($posts as $post)
    <div class="guia-card p-4 mb-4">
        <h3 class="guia-titulo ">{{ $post->titulo }}</h3>
        <p>{{ $post->contenido }}</p>
        <p class="guia-autor">Publicado por <b>{{ $post->user->nombre }}</b> el {{ $post->created_at->format('d/m/Y H:i') }}</p>

        @if(auth()->check() && auth()->id() === $post->user_id)
            <div class="guia-botones">
                <button class="btnpost" type="button" onclick="document.getElementById('edit-{{ $post->id }}').classList.toggle('hidden')">Editar</button>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button  class="btnpost" onclick="return confirm('¿Seguro que deseas eliminar este post?')">Eliminar</button>
                </form>
            </div>

            <form id="edit-{{ $post->id }}" class="hidden mt-2 guia-card p-4 mb-5  formgrupo" action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input  class="subti form-label" type="text" name="titulo" value="{{ $post->titulo }}" required>
                <textarea class="form-control guia-input" name="contenido" required>{{ $post->contenido }}</textarea>
                <button class="btnpost" type="submit">Actualizar</button>
            </form>
        @endif
    </div>
@endforeach
    

    <div id="Publicacion" class="guia-card p-4 mb-5">
        <h2 class="vtitulo mb-3">Crear nueva publicación</h2>


        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="mb-3 formgrupo">
                <label class="subti form-label">Título</label>
                <input type="text" name="titulo" class="form-control guia-input" required>
            </div>

            <div class="mb-3 formgrupo">
                <label class="subti form-label">Contenido</label>
                <textarea name="contenido" class="form-control guia-input" rows="4" required></textarea>
            </div>

            <button class="btnpost">Publicar</button>
        </form>
    </div>

</div>
@endsection