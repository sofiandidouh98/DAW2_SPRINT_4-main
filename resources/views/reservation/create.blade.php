@extends('layouts.plantilla')

@section('title','Crear una reserva')

@section('content')
    <h1>Crea una reserva per a...</h1>
    <form action="{{route('reservations.store')}}" method="POST">

        @csrf

        <label>
            Quan comença:
            <br>
            <!-- datetime deprecated, datetime-local retorna null a $request -->
            <input type="datetime-local" name="start_date">
        </label>

        <br>
        <label>
            Quan acaba:
            <br>
            <input type="datetime-local" name="end_date">
        </label>

        <br>
        <button type="submit">Enviar</button>
    <form>
@endsection