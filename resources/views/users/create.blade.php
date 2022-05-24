@extends('templateAdmin')

@section('title', 'Crear un usuari')

@section('content')

    <div class="container info margin-top">
      <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuaris</a></li>
        <li class="breadcrumb-item active" aria-current="page">Crear usuari</li>
      </ol>
      </nav>

      <div class="titol-update">
        <div id="nomTitol">
            <h2 class="thin">Creació d'un usuari</h2>
        </div>
      </div>
      <hr class="margin-hr">

      <form action="{{ route('users.store') }}" method="post" class="formulari">
        @csrf

        <div class="row formulari">

          <div class="col-md-6">
            <label>Nom<span class="text-danger">*</span></label>
            <input type="text" placeholder="Nom" id="name" name="name" class="formulari-crear" value="{{@old('name')}}"/>

            @error('name')
              <br><small class="error">*{{$message}}</small><br>
            @enderror
            <br>
          </div>

          <div class="col-md-6 margin-left-formulari">
            <label>Cognoms<span class="text-danger">*</span></label>
            <input type="text" placeholder="Cognoms" id="last_name" name="last_name" class="formulari-crear" value="{{@old('last_name')}}"/>
            
            @error('last_name')
              <br><small class="error">*{{$message}}</small><br>
            @enderror
            <br>
          </div>

          <div class="col-md-6">
            <label>Correu electrònic<span class="text-danger">*</span></label>
            <input type="email" placeholder="Correu" id="email" name="email" class="formulari-crear" value="{{@old('email')}}"/>
                
            @error('email')
              <br><small class="error">*{{$message}}</small><br>
            @enderror
            <br>         
          </div>

          <div class="col-md-6 margin-left-formulari">
            <label>DNI/NIE<span class="text-danger">*</span></label>
            <input type="text" placeholder="DNI/NIE" id="id_card" name="id_card" class="formulari-crear" value="{{@old('id_card')}}"/>
            
            @error('id_card')
              <br><small class="error">*{{$message}}</small><br>
            @enderror
            <br>
          </div>            
          
          <div class="col-md-6">
            <label>Contrasenya<span class="text-danger">*</span></label>
            <input type="password" placeholder="Contrasenya" id="password" name="password" class="formulari-crear"/>
          </div>

          <div class="col-md-6 margin-left-formulari">
            <label for="password-confirm">Confirma la contrasenya<span class="text-danger">*</span></label>
            <input id="password-confirm" class="formulari-crear" type="password" class="form-control" name="password_confirmation" placeholder="Repeteix la contrasenya" autocomplete="new-password">
          </div>
          
          @error('password')
              <br><small class="error">*{{$message}}</small><br>
          @enderror


          <br>
        </div>

        <button class="formulari-send btn btn-action" type="submit">Crear</button>

    </form>
  </div>
@endsection
