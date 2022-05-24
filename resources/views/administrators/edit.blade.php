@extends('templateAdmin')

@section('title', 'Editar administrador' . $administrator->name)

@section('content')

<div class="container info margin-top">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('administrators.index') }}">Administradors</a></li>
            <li class="breadcrumb-item active" aria-current="page">Actualitzar administrador</li>
        </ol>
    </nav>

    <div class="titol-update">
        <div id="nomTitol">
            <h2 class="thin">Actualització de l'administrador - {{ $administrator->name }} {{ $administrator->last_name }}</h2>
        </div>
    </div>
    <hr class="margin-hr">

    <form action="{{ route('administrators.update', $administrator) }}" method="post" class="formulari">
        @csrf

        @method('put')

        <div class="row formulari">
            <div class="col-md-6">
                <label>Nom<span class="text-danger">*</span></label>
                <input type="text" placeholder="Nom" id="name" name="name" class="formulari-crear" value="{{ $administrator->name }}"/>

                @error('name')
                <br><small class="error">*{{$message}}</small><br>
                @enderror
                <br>
                
            </div>
            <div class="col-md-6 margin-left-formulari">
                <label>Cognoms<span class="text-danger">*</span></label>
                <input type="text" placeholder="Cognoms" id="last_name" name="last_name" class="formulari-crear" value="{{ $administrator->last_name }}"/>
            
                @error('last_name')
                <br><small class="error">*{{$message}}</small><br>
                @enderror
                <br>
            
            </div>
            <div class="col-md-6">
                <label>Correu electrònic<span class="text-danger">*</span></label>
                <input type="email" placeholder="Correu" id="email" name="email" class="formulari-crear" value="{{ $administrator->email }}"/>
                
                @error('email')
                <br><small class="error">*{{$message}}</small><br>
                @enderror
                <br>
            
            </div>
            <div class="col-md-6 margin-left-formulari">
                <label>DNI/NIE<span class="text-danger">*</span></label>
                <input type="text" placeholder="DNI/NIE" id="id_card" name="id_card" class="formulari-crear" value="{{ $administrator->id_card }}"/>
            
                @error('id_card')
                <br><small class="error">*{{$message}}</small><br>
                @enderror
                <br>
            </div>            
        </div>
        <button class="formulari-send btn btn-action" type="submit">Actualitzar</button>
    </form>
</div>
@endsection