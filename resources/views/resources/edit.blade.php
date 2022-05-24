@extends('templateAdmin')

@section('head')

@section('title', 'Crear recurs')

@section('content')

<div class="container info margin-top">  
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item"><a href="">Projectes</a></li>
    <li class="breadcrumb-item"><a href="{{ route('resources.index') }}">Recursos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar recurs</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$resource->name}}</li>
    </ol>
    </nav>
    
    <div class="titol-update">
        <div id="nomTitol">
            <h2 class="thin">Edició d'un recurs - {{$resource->name}}</h2>
        </div>
      </div>
      <hr class="margin-hr">  
            
            
            <form id="editRecurs" action="{{route('resources.update', $resource)}}" method="post">
                <div class="row formulari">
                    @csrf
                    @method('put')

                    <label>Nom<span class="text-danger">*</span></label>
                    <input type="text" placeholder="Nom" id="resourcename" name="resourcename" class="formulari-crear" value="{{$resource->name}}" />
                    @error('resourcename')
                    <br>
                    <small>*{{$message}}</small>
                    <br><br>
                    @enderror
                    <br><label>Descripció<span class="text-danger">*</span></label>
                    <input type="text" placeholder="Afegeix una descripció" id="resourcedesc" name="resourcedesc" class="formulari-crear" value="{{$resource->description}}"/>
                    @error('resourcedesc')
                    <br>
                    <small>*{{$message}}</small>
                    <br><br>
                    @enderror
                    <br><label>Creada per:</label>
                    <input type="text" placeholder="1,2,3.." id="resourceCreatedBy" name="resourceCreatedBy" class="formulari-crear" value="{{$resource->provided_by}}"/>
                    <br><label>Projecte:</label>
                    <input type="text" placeholder="1,2,3.." id="resourceIDproject" name="resourceIDproject" class="formulari-crear" value="{{$resource->id_project}}"/>

                    <button type="submit" class="btn btn-primary" id="confirm">Editar</button>
                </div>
            </form>              
        
    </div>

@endsection