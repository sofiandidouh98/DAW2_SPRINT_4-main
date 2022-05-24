@extends('templateAdmin')


@section('title', 'Incidencies' . $incident->title)

@section('content')
       
<div class="container info margin-top">  
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('incidents.index') }}">Incidencies</a></li>
            <li class="breadcrumb-item active" aria-current="page">Actualitzar Incidencia</li>
        </ol>
    </nav>
    
    <div class="titol-update">
        <div id="nomTitol">
            <h2 class="thin">Actualització de l'incidencia - {{ $incident->title }} </h2>
        </div>
    </div>
    <hr class="margin-hr">

    <form action="{{ route('incidents.update', $incident) }}" method="post" class="formulari">
        @csrf

        @method('put')

        <div class="row formulari">
            <div class="col-md-6">
                <label>Nom de l'incidencia<span class="text-danger">*</span></label>
                <input type="text" placeholder="Nom de l'incidencia" id="title" name="title" class="formulari-crear" value="{{ $incident->title }}"/>
                
                <label>Maquina<span class="text-danger">*</span></label>
                <select name="id_machine" id="id_machine" class="formulari-crear">
                    @foreach ($machines as $machine)
                      <option value="{{ $machine->id }}">{{ $machine->name }}</option>
                      
                    @endforeach
                  </select>
                
                <label>Usuari</label>
                <select name="id_user" id="id_user" class="formulari-crear">
                    @foreach ($users as $user)
                      <option value="{{ $user->id }}">{{ $user->name }}</option>
                      
                    @endforeach
                  </select> 
                         
                <label>Estat</label>
                <select name="id_incident_state" id="id_incident_state" class="formulari-crear">
                    @foreach ($states as $state)
                      <option value="{{ $state->id }}">{{ $state->state}}</option>
                      
                    @endforeach
                  </select> 

            </div>
            <div class="col-md-6 margin-left-formulari">
                <label>Descripcio<span class="text-danger">*</span></label>
                <textarea placeholder="Descripció" maxlength="1000" id="description" name="description" class="formulari-crear-textarea">{{ $incident->description }}</textarea>
            </div>

            <button class="formulari-send btn btn-action" type="submit">Actualitzar</button>
        </div>
    </form>
</div>
@endsection