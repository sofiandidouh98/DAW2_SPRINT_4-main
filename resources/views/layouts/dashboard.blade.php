@extends('templateAdmin')

@section('title', 'Dashboard')

@section('content')

<div class="container info margin-top">
    <ol class="breadcrumb">
    </ol>
    <h2 class="thin">Home</h2>
    <hr>

    <div class="options">
        <button class="option" onclick="location.href = '{{ route('users.index') }}'">Usuaris</button>
        <button class="option" onclick="location.href = '{{ route('administrators.index') }}'">Administradors</button>
        <button class="option" onclick="location.href = ''">Missatgeria</button>
        <button class="option" onclick="location.href = ''">Màquines</button>
        <button class="option" onclick="location.href = ''">Materials</button>
        <button class="option" onclick="location.href = '{{ route('proposals.index') }}'">Propostes</button>
        <button class="option" onclick="location.href = ''">Projectes</button>
        <button class="option" onclick="location.href = '{{ route('incidents.index') }}'">Incidències</button>
        <button class="option" onclick="location.href = ''">Factura</button>
        <button class="option" onclick="location.href = ''">Reserva</button>
    </div>
</div>

@endsection