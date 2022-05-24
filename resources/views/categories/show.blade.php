@extends('layout.template')

@section('title', 'Propostes' . $proposal->title)

@section('content')
    <h1>Pagina de la proposta {{ $proposal->title }} </h1>
    <a href="{{ route('proposals.index') }}">Tornar</a>
    <a href="{{ route('proposals.edit', $proposal) }}">Editar Proposta</a>
    <p><strong>Locatitat:</strong>{{ $proposal->location }}</p>
    <p><strong>Descripció:</strong>{{ $proposal->description }}</p>

    <form action="{{ route('proposals.destroy',$proposal) }}" method="POST">
        
        @csrf
        
        @method('delete')

        <button type="submit">Eliminar</button>
    </form>
@endsection