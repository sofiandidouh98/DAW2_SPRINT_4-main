@extends('layouts.plantilla')

@section('title', 'Veure Màquina' . $machine)

@section('content')
    <h1>Mostra la màquina {{$machine->name}}</h1>
    <a href="{{route('machines.index')}}">Tornar a màquines</a>
    <br>
    <a href="{{route('machines.edit', $machine)}}">Editar la màquina</a>
    <p><strong>Marca: </strong>{{$machine->brand}}</p>
    <p><strong>Model: </strong>{{$machine->model}}</p>
    <p>{{$machine->description}}</p>
@endsection