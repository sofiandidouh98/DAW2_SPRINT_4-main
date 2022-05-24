@extends('templateAdmin')

@section('title', 'Incidencies')

@section('content')
       
    <div class="container info margin-top">  
      <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <!--<li class="breadcrumb-item"><a href="{{ route('proposals.index') }}">Propostes</a></li>-->
        <li class="breadcrumb-item active" aria-current="page">Crear Incidencia</li>
      </ol>
      </nav>
    
      <div class="titol-update">
        <div id="nomTitol">
            <h2 class="thin">Creació d'una incidencia</h2>
        </div>
      </div>
      <hr class="margin-hr">

      <form action="{{ route('incidents.store') }}" method="post" class="formulari">
        @csrf

        <div class="row formulari">
          <div class="col-md-6">
            
            <label>Nom de la incidencia<span class="text-danger">*</span></label>
            <input type="text" placeholder="Proposta" id="title" name="title" class="formulari-crear"/>
            
            <label>Maquina<span class="text-danger">*</span></label>
            <select name="id_machine" id="id_machine" class="formulari-crear">
              @foreach ($machines as $machine)
                <option value="{{ $machine->id }}">{{ $machine->name }}</option>
                
              @endforeach
            </select>  

            <label>Usuari<span class="text-danger">*</span></label>
            <select name="id_user" id="id_user" class="formulari-crear">
              @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                
              @endforeach
            </select>  

          </div>

          <div class="col-md-6 margin-left-formulari">
            <label>Descripció<span class="text-danger">*</span></label>
            <textarea placeholder="Descripció" maxlength="1000" id="description" name="description" class="formulari-crear-textarea"></textarea>
          </div>

          <button class="formulari-send btn btn-action" type="submit">Crear</button>
        </div>
      </form>
    </div>
@endsection