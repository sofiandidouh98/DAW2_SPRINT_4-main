@extends('layout.template')

@section('title', 'Propostes')

@section('content')
    <h1>Pagina per a crear propostes</h1>

    <form action="{{ route('proposals.store') }}" method="post">
        
        @csrf

        <label>Nom de la proposta<span class="text-danger">*</span>
            <br>
        <input type="text" placeholder="Proposta" id="title" name="title" />
        </label>
        <br>
        <br>
        <label>Localitat<span class="text-danger">*</span>
            <br>
        <input type="text" placeholder="Localitat" id="location" name="location"/>
    </label>
    <br>
        <br>
        <label>Descripció<span class="text-danger">*</span>
            <br>
        <textarea placeholder="Descripció" maxlength="1000" id="description" name="description"></textarea>
    </label>
    <br>
    <br>
    <button type="submit">Crear proposta</button>					
    </form>
@endsection