@extends('layout.template')

@section('title', 'Propostes' . $proposal->title)

@section('content')
<h1>Pagina per actualitzar la proposta {{ $proposal->title }}</h1>

<form action="{{ route('proposals.update', $proposal) }}" method="post">
    
    @csrf

    @method('put')

    <label>Nom de la proposta<span class="text-danger">*</span>
        <br>
    <input type="text" placeholder="Proposta" id="title" name="title" value="{{ $proposal->title }}"/>
    </label>
    <br>
    <br>
    <label>Localitat<span class="text-danger">*</span>
        <br>
    <input type="text" placeholder="Localitat" id="location" name="location" value="{{ $proposal->location }}"/>
</label>
<br>
    <br>
    <label>Descripció<span class="text-danger">*</span>
        <br>
    <textarea placeholder="Descripció" maxlength="1000" id="description" name="description">value="{{ $proposal->description }}"</textarea>
</label>
<br>
<br>
<button type="submit">Actualitzar proposta</button>					
</form>
@endsection