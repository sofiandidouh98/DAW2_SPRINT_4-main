@extends('layouts.plantilla')

@section('title', 'Reserves')

@section('content')
    <h1>Benvingut a les teves reserves</h1>
    <a href="{{route('reservations.create')}}">Crea una reserva</a>
    <ul>
        @foreach ($reservations as $reservation)
            <li>
                <a href="{{route('reservations.show', $reservation->id)}}">{{$reservation->start_date}}</a>
            </li>
        @endforeach
    </ul>

    {{$reservations->links()}}

@endsection