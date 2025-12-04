@extends('layouts.app')

@section('title', 'Recursos')

@section('content')
    <!-- SECCIÓN DE RECURSOS -->
    <div class="seccion-recursos">
        <h1 class="titulo-recursos">Centros de Recursos Disponibles</h1>
        <p class="subtitulo-recursos">
            Los Centros de Recursos reúnen los víveres y suministros esenciales que aún quedan disponibles. 
            Aquí podrás identificar puntos seguros donde otros supervivientes han compartido alimentos, agua y 
            herramientas básicas para ayudarte a mantenerte con vida.
        </p>
        
        <!-- SCROLL HORIZONTAL DE TIENDAS -->
        <div class="scroll-tiendas">
            @foreach ($stores as $store)
                <div class="tarjeta-tienda" onclick="mostrarDetalle({{ $store->id }})" style="cursor: pointer;">
                    <img src="{{ asset($store->imagen) }}" alt="{{ $store->nombre }}">

                    <div class="info-tienda">
                        <h3 class="nombre-tienda">{{ $store->nombre }}</h3>

                        <span class="estado {{ strtolower($store->estado) == 'estable' ? 'estable' : 'inestable' }}">
                            ● {{ ucfirst($store->estado) }}
                        </span>

                        <p class="descripcion-tienda">{{ $store->descripcion }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    <!-- TARJETA DE DETALLE (aparece al hacer click) -->
<div id="detalle-tienda">
    <div class="detalle-contenido">
        <img id="detalle-imagen" src="" alt="">
        
        <div class="detalle-info">
            <h2 id="detalle-nombre"></h2>
            
            <span id="detalle-estado-badge" class="estado"></span>
            
            <h3 class="detalle-seccion-titulo">Sobre esta tienda:</h3>
            <p id="detalle-sobre"></p>
            
            <button class="botoninicio botontexto" >
                Ver ubicación
            </button>
            <input type="hidden" id="detalle-url">
        </div>
    </div>
</div>
        
    </div>

    <script>
        const storesData = @json($stores);
        
        function mostrarDetalle(id) {
            const store = storesData.find(s => s.id === id);
            
            if (store) {
                document.getElementById('detalle-imagen').src = "{{ asset('') }}" + store.imagen;
                document.getElementById('detalle-nombre').textContent = store.nombre;
                document.getElementById('detalle-sobre').textContent = store.sobre_tienda;
                document.getElementById('detalle-url').value = store.url_destino;
                
                // Actualizar el badge de estado
                const estadoBadge = document.getElementById('detalle-estado-badge');
                estadoBadge.textContent = '● ' + store.estado;
                estadoBadge.className = 'estado ' + (store.estado.toLowerCase() === 'estable' ? 'estable' : 'inestable');
                
                document.getElementById('detalle-tienda').style.display = 'block';
                
                // Scroll suave hacia el detalle
                document.getElementById('detalle-tienda').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        }
    </script>
@endsection