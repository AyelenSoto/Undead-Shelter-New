@extends('layouts.app')

@section('title', 'Recursos')

@section('content')
    <!-- SECCIÓN DE RECURSOS -->
    <div class="seccion-recursos">
        <h1 class="titulo-recursos">Centros de Recursos Disponibles</h1>
        <p class="subtitulo-recursos">Los Centros de Recursos reúnen los víveres y suministros esenciales que aún quedan disponibles. Aquí podrás identificar puntos seguros donde otros supervivientes han compartido alimentos, agua y herramientas básicas para ayudarte a mantenerte con vida.</p>
        
        <!-- SCROLL HORIZONTAL DE TIENDAS -->
        <div class="scroll-tiendas">
            
            <!-- TIENDA 1 -->
            <div class="tarjeta-tienda">
                <img src="{{ asset('images/Metro.png') }}" alt="Supermercado Metro">
                <div class="info-tienda">
                    <h3 class="nombre-tienda">Supermercado Metro</h3>
                    <span class="estado estable">● Estable</span>
                    <p class="descripcion-tienda">Suministros básicos disponibles</p>
                </div>
            </div>

            <!-- TIENDA 2 -->
            <div class="tarjeta-tienda">
                <img src="{{ asset('images/PlazaVea.png') }}" alt="Plaza Vea">
                <div class="info-tienda">
                    <h3 class="nombre-tienda">Plaza Vea</h3>
                    <span class="estado inestable">● Inestable</span>
                    <p class="descripcion-tienda">Zona de alto riesgo, pocos recursos</p>
                </div>
            </div>

            <!-- TIENDA 3 -->
            <div class="tarjeta-tienda">
                <img src="{{ asset('images/Tottus.jpg') }}" alt="Tottus">
                <div class="info-tienda">
                    <h3 class="nombre-tienda">Tottus</h3>
                    <span class="estado estable">● Estable</span>
                    <p class="descripcion-tienda">Medicinas y alimentos enlatados</p>
                </div>
            </div>

            <!-- TIENDA 4 -->
            <div class="tarjeta-tienda">
                <img src="{{ asset('images/Kosto.jpg') }}" alt="Wong">
                <div class="info-tienda">
                    <h3 class="nombre-tienda">Kosto</h3>
                    <span class="estado estable">● Estable</span>
                    <p class="descripcion-tienda">Agua embotellada y conservas</p>
                </div>
            </div>

            <!-- TIENDA 5 -->
            <div class="tarjeta-tienda">
                <img src="{{ asset('images/Makro.jpg') }}" alt="Makro">
                <div class="info-tienda">
                    <h3 class="nombre-tienda">Makro</h3>
                    <span class="estado inestable">● Inestable</span>
                    <p class="descripcion-tienda">Gran cantidad pero zona peligrosa</p>
                </div>
            </div>

            <!-- TIENDA 6 -->
            <div class="tarjeta-tienda">
                <img src="{{ asset('images/Bodega.jpg') }}" alt="Bodega Local">
                <div class="info-tienda">
                    <h3 class="nombre-tienda">Bodega Familiar</h3>
                    <span class="estado estable">● Estable</span>
                    <p class="descripcion-tienda">Pequeña pero segura</p>
                </div>
            </div>

        </div>
    </div>
@endsection