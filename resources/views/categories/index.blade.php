@extends('layout.template')

@section('title', 'Propostes')

@section('content')
    <h1>Pagina principal de propostes</h1>
    <a href="{{ route('proposals.create') }}">Crear proposta</a>
    <ul>
        @foreach ($proposals as $proposal)
            <li>
                <a href="{{  route('proposals.show', $proposal)  }}">{{ $proposal->title}}</a>
            </li>
        @endforeach

    </ul>
    {{ $proposals->links() }}
@endsection