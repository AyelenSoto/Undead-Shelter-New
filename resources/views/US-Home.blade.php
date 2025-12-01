@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div>
    @if (session('success'))         
        <div class="btninicio">
         {{ session('success') }}
        </div>
    @endif
</div>

@endsection