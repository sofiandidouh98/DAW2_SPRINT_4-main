@extends('templateAdmin')

@section('title', 'Crear recurs')

@section('content')

<div class="container info margin-top">  
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="">Projectes</a></li>
            <li class="breadcrumb-item"><a href="{{ route('resources.index') }}">Recursos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Crear recurs</a></li>
        </ol>
    </nav>
    
    <div class="titol-update">
        <div id="nomTitol">
            <h2 class="thin">Creació d'un recurs</h2>
        </div>
      </div>
      <hr class="margin-hr">            
            
            <form id="addRecurs" action="{{route('resources.store')}}" method="post">
                <div class="row formulari">
                @csrf

                    <label>Nom<span class="text-danger">*</span></label>
                    <input type="text" placeholder="Nom" id="resourcename" name="resourcename" class="formulari-crear" value="{{old('resourcename')}}" />
                    @error('resourcename')
                    <br>
                    <small>*{{$message}}</small>
                    <br><br>
                    @enderror
                    <br><label>Descripció<span class="text-danger">*</span></label>
                    <input type="text" placeholder="Afegeix una descripció" id="resourcedesc" name="resourcedesc" class="formulari-crear" value="{{old('resourcedesc')}}"/>
                    @error('resourcedesc')
                    <br>
                    <small>*{{$message}}</small>
                    <br><br>
                    @enderror
                    <br><label>Creada per:</label>
                    <input type="text" placeholder="1,2,3.." id="resourceCreatedBy" name="resourceCreatedBy" class="formulari-crear"/>
                    <br><label>Projecte:</label>
                    <input type="text" placeholder="1,2,3.." id="resourceIDproject" name="resourceIDproject" class="formulari-crear"/>

                    <button type="submit" class="btn btn-primary" id="confirm">Crear</button>
                </div>  
            </form>
        
    </div>

@endsection