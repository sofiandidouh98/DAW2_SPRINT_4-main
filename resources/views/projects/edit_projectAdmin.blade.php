@extends('templateAdmin')

@section('title','Projectes')
@section('content')

<script src="{{ asset('js/Project.js') }}"></script>

<div class="container info margin-top">  


        <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('indexAdmin.list') }}">Projectes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Projecte</a></li>
                </ol>
                </nav>
        <br>
<link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">

    <form id="addProjectAdmin" action="{{route('projectAdmin.saveEdit', $id)}}" method="post">
        
        @csrf
        @method('put')

{{--  {{ method_field('put') }} --}}

        <label>Nom del Projecte<span class="text-danger"> *</span></label>
        <input type="text" placeholder="Nom" id="projectname" name="projectname" class="formulari-crear" value="{{$id->title}}"/>
        <p class="error" id="errorProjectNameAdmin"></p>
        
{{--         @error('projectname')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror --}}
        <label>Localitat<span class="text-danger"> *</span></label>
        <input type="text" placeholder="Localitat" id="location" name="location" class="formulari-crear" value="{{$id->location}}" />
        <p class="error" id="errorProjectLocationAdmin"></p>

        {{--         @error('location')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror --}}
        
        <br>
        <label>Categoria<span class="text-danger"> *</span></label>
        <select id="category" name="category" class="formulari-crear">
        <option value="1">Esports </option><option value="2">Motor </option><option value="3">Moda </option><option value="4">Fitness </option><option value="5">Música </option><option value="6">Robòtica </option><option value="7">Videojocs </option><option value="8">Ciència </option><option value="9">Matemàtiques </option><option value="10">Social </option>						</select>
        <br>
        <label>Descripció<span class="text-danger"> *</span></label>
        <input type="text" placeholder="Descripció" id="description" name="description" class="formulari-crear" value="{{$id->description}}" />
        <p class="error" id="errorProjectDescriptionAdmin"></p>

        {{--         @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror --}}
        <br>
        <button type="button" class="btn btn-primary" onclick="Project.checkProject();return false;" id="confirmarProjecteAdmin">Actualitzar</button>
</form>

</div>
@endsection