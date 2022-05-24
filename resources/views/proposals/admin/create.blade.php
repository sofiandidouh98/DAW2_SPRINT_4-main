@extends('templateAdmin')

@section('title', 'Propostes')

@section('content')
       
    <div class="container info margin-top">  
      <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('proposals.index') }}">Propostes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Crear proposta</li>
      </ol>
      </nav>
    
      <div class="titol-update">
        <div id="nomTitol">
            <h2 class="thin">Creació d'una proposta</h2>
        </div>
      </div>
      <hr class="margin-hr">

      <form action="{{ route('proposals.store') }}" method="post" class="formulari">
        @csrf

        <div class="row formulari">
          <div class="col-md-6">
            
            <label>Nom de la proposta<span class="text-danger">*</span></label>
            <input type="text" placeholder="Proposta" id="title" name="title" class="formulari-crear" value="{{ old('title') }}"/>
            @error('title')
              <small><p class="error">*{{ $message }}</p></small>
            @enderror
            
            <label>Localitat<span class="text-danger">*</span></label>
            <input type="text" placeholder="Localitat" id="location" name="location" class="formulari-crear" value="{{ old('location') }}"/>
            @error('location')
              <small><p class="error">*{{ $message }}</p></small>
            @enderror
            
            <label>Categoria</label>
            <select id="category" name="category" class="formulari-crear">
              @foreach ($categories as $category)
              <option value={{ $category->id}}>{{$category->category}}</option>
              @endforeach
            </select>
            
            <label>Usuari</label>
            <select name="creator" id="creator" name="creator" class="formulari-crear">
              @foreach ($users as $user)
              <option value={{ $user->id}}>{{$user->name}} {{$user->last_name}}</option>
              @endforeach
            </select>
            
            <label>Estat</label>
            <select name="state" id="state" name="state" class="formulari-crear">
              @foreach ($states as $state)
              <option value={{ $state->id}}>{{$state->state}}</option>
              @endforeach
            </select>   
              
            <label>Imatge</label>
            <input type="file" id="image" name="image" accept="image/png, .jpeg, .jpg, image/gif" class="formulari-crear" value="{{ old('image') }}"/>
          </div>

          <div class="col-md-6 margin-left-formulari">
            <label>Descripció<span class="text-danger">*</span></label>
            <textarea placeholder="Descripció" maxlength="1000" id="description" name="description" class="formulari-crear-textarea">{{ old('description') }}</textarea>
            @error('description')
              <small><p class="error">*{{ $message }}</p></small>
            @enderror
          </div>

          <button class="formulari-send btn btn-action" type="submit">Crear</button>
        </div>
      </form>
    </div>
@endsection