@extends('layouts.plantilla')

@section('title', 'Les meves reserves')

@section('content')
    <h1>Reserva del {{$reservation->start_date}} al {{$reservation->end_date}}</h1>
    <a href="{{route('reservations.index')}}">Tornar a reserves</a>
    <br>
    <a href="{{route('reservations.edit', $reservation)}}">Editar reserva</a>
    <p>Creada el {{$reservation->created_at}}.</p>
    <p>Actualitzada el {{$reservation->updated_at}}.</p>

    <form action="{{route('reservations.destroy', $reservation)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Eliminar reserva</button>
    </form>
@endsection