@extends('layouts.plantilla')

@section('title','Editar una reserva')

@section('content')
    <h1>Editant reserva</h1>
    <form action="{{route('reservations.update', $reservation)}}" method="post">

        @csrf

        @method('put')

        <label>
            Quan comença:
            <br>
            <!-- datetime deprecated -->
            <input type="datetime-local" name="start_date" value="{{$reservation->start_date}}">
        </label>

        <br>
        <label>
            Quan acaba:
            <br>
            <input type="datetime-local" name="end_date" value="{{$reservation->end_date}}">
        </label>

        <br>
        <button type="submit">Actualitzar reserva</button>
    <form>
@endsection