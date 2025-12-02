@extends('layouts.app')

@section('title', 'Mapa de Zonas')

@section('content')

<div class="us-mapa-contenedor">

    <h1 class="us-mapa-titulo">Mapa de Zonas - Arequipa</h1>

    <div id="us-mapa" class="us-mapa"></div>

    <div class="us-mapa-leyenda">
        <div class="us-item"><span class="us-color us-verde"></span> Refugios</div>
        <div class="us-item"><span class="us-color us-rojo"></span> Peligroso</div>
        <div class="us-item"><span class="us-color us-amarillo"></span> Neutral</div>
    </div>

</div>

@endsection


@section('scripts')

<!-- Leaflet -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>

    // ==============================
    //        MAPA AREQUIPA
    // ==============================

    var mapa = L.map('us-mapa').setView([-16.4090, -71.5375], 14);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19
    }).addTo(mapa);

    // ===================================
    //     ZONAS DE DEMOSTRACIÓN AQP
    // ===================================
    const zonas = [
     {
    nombre: "Estadio Monumental de la UNSA",
    estado: "Refugio Temporal",
    color: "green",
    lat: -16.40724,
    lng: -71.52018
  },
  {
    nombre: "Plaza de Armas de Arequipa",
    estado: "Punto de Reunión",
    color: "yellow",
    lat: -16.39880705,
    lng: -71.53689660
  },
  {
    nombre: "Estadio Mariano Melgar",
    estado: "Refugio Temporal",
    color: "green",
    lat: -16.40880556,
    lng: -71.53499970
  },
  {
    nombre: "Parque Selva Alegre",
    estado: "Zona Segura Amplia",
    color: "yellow",
    lat: -16.38960,
    lng: -71.53100
  },
  {
    nombre: "Universidad Católica Santa María (UCSM) - Campus",
    estado: "Centro de Evacuación",
    color: "green",
    lat: -16.40620,
    lng: -71.54760
  }
];


    // Crear marcadores
    zonas.forEach(z => {
        L.circleMarker([z.lat, z.lng], {
            radius: 10,
            color: z.color,
            fillColor: z.color,
            fillOpacity: 0.9
        })
        .addTo(mapa)
        .bindPopup(`<b>${z.nombre}</b><br>Estado: ${z.estado}`);
    });

</script>

@endsection
