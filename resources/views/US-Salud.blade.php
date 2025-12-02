@extends('layouts.app')

@section('title', 'Recursos')

@section('content')
<div>
    <div class="seccion-recursos3">
        <h1 class="titulo-recursos2">Botiquín de Emergencia: Elementos Esenciales</h1>

        <div class="scroll-botiquin2">
            
            <!-- ITEM 1 -->
            <div class="item-botiquin2">
                <img src="{{ asset('images/vendas.jpg') }}" alt="Vendajes">
                <div class="info-botiquin">
                    <strong class= "info-botiquin1" >Vendajes</strong>
                    <p>Para cubrir heridas y detener sangrado leve.</p>
                </div>
            </div>

            <!-- ITEM 2 -->
            <div class="item-botiquin2">
                <img src="{{ asset('images/gasas.jpg') }}" alt="Gasas">
                <div class="info-botiquin">
                    <strong class= "info-botiquin1">Gasas</strong>
                    <p>Absorben sangre y protegen cortes o raspaduras.</p>
                </div>
            </div>

            <!-- ITEM 3 -->
            <div class="item-botiquin2">
                <img src="{{ asset('images/antiseptico.jpg') }}" alt="Antiséptico">
                <div class="info-botiquin">
                    <strong class= "info-botiquin1">Antiséptico</strong>
                    <p>Desinfecta heridas y previene infecciones.</p>
                </div>
            </div>

            <!-- ITEM 4 -->
            <div class="item-botiquin2">
                <img src="{{ asset('images/analgesico.jpg') }}" alt="Analgésicos">
                <div class="info-botiquin">
                    <strong class= "info-botiquin1">Analgesicos</strong>
                    <p>Paracetamol o ibuprofeno para aliviar dolor y fiebre.</p>
                </div>
            </div>

            <!-- ITEM 5 -->
            <div class="item-botiquin2">
                <img src="{{ asset('images/termometro.jpg') }}" alt="Termómetro">
                <div class="info-botiquin">
                    <h2 class= "info-botiquin1">Termómetro</strong>
                    <p>Para medir la temperatura corporal.</p>
                </div>
            </div>

            <!-- ITEM 6 -->
            <div class="item-botiquin2">
                <img src="{{ asset('images/tijeras.jpg') }}" alt="Tijeras y pinzas">
                <div class="info-botiquin">
                    <strong class= "info-botiquin1">Tijeras y pinzas</strong>
                    <p>Para cortar vendajes y manipular objetos pequeños.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SECCIÓN DE CENTROS DE SALUD -->
<div class="seccion-recursos2">
    <h1 class="titulo-recursos">Centros de Salud Disponibles en Arequipa</h1>
    <p class="subtitulo-recursos">Aquí encontrarás hospitales y centros de salud que aún están operativos. Estos lugares proporcionan atención médica básica y suministros esenciales para quienes los necesiten.</p>
    
    <!-- SCROLL HORIZONTAL DE CENTROS -->
    <div class="scroll-tiendas">
        
        <!-- CENTRO 1 -->
        <div class="tarjeta-tienda">
            <img src="{{ asset('images/HospitalRegional.jpg') }}" alt="Hospital Regional Arequipa">
            <div class="info-tienda">
                <h3 class="nombre-tienda">Hospital Regional Arequipa</h3>
                <span class="estado estable">● Estable</span>
                <p class="descripcion-tienda">Atención de emergencia y consultas generales</p>
            </div>
        </div>

        <!-- CENTRO 2 -->
        <div class="tarjeta-tienda">
            <img src="{{ asset('images/EssaludArequipa.jpg') }}" alt="ESSALUD Arequipa">
            <div class="info-tienda">
                <h3 class="nombre-tienda">ESSALUD Arequipa</h3>
                <span class="estado inestable">● Inestable</span>
                <p class="descripcion-tienda">Atención limitada, disponibilidad de camas reducida</p>
            </div>
        </div>

        <!-- CENTRO 3 -->
        <div class="tarjeta-tienda">
            <img src="{{ asset('images/ClinicaArequipa.jpg') }}" alt="Clínica Arequipa">
            <div class="info-tienda">
                <h3 class="nombre-tienda">Clínica Arequipa</h3>
                <span class="estado estable">● Estable</span>
                <p class="descripcion-tienda">Consultas privadas y suministros médicos básicos</p>
            </div>
        </div>

        <!-- CENTRO 4 -->
        <div class="tarjeta-tienda">
            <img src="{{ asset('images/HospitalHonorio.jpg') }}" alt="Hospital Honorio Delgado">
            <div class="info-tienda">
                <h3 class="nombre-tienda">Hospital Honorio Delgado</h3>
                <span class="estado estable">● Estable</span>
                <p class="descripcion-tienda">Atención de emergencias y especialidades médicas</p>
            </div>
        </div>

    </div>
</div>


@endsection