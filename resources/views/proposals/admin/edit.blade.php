@extends('templateAdmin')


@section('title', 'Propostes' . $proposal->title)

@section('content')
       
<div class="container info margin-top">  
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('proposals.index') }}">Propostes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Actualitzar proposta</li>
        </ol>
    </nav>
    
    <div class="titol-update">
        <div id="nomTitol">
            <h2 class="thin">Actualització de la proposta - {{ $proposal->title }} </h2>
        </div>
    </div>
    <hr class="margin-hr">

    <form action="{{ route('proposals.updateAdmin', $proposal) }}" method="post" class="formulari">
        @csrf

        @method('put')

        <div class="row formulari">
            <div class="col-md-6">
                <label>Nom de la proposta<span class="text-danger">*</span></label>
                <input type="text" placeholder="Nom de la proposta" id="title" name="title" class="formulari-crear" value="{{ old('title',$proposal->title) }}"/>
                @error('title')
                    <small><p class="error">*{{ $message }}</p></small>
                @enderror


                <label>Localitat<span class="text-danger">*</span></label>
                <input type="text" placeholder="Localitat" id="location" name="location" class="formulari-crear" value="{{ old('location',$proposal->location) }}"/>
                @error('location')
                    <small><p class="error">*{{ $message }}</p></small>
                @enderror

                <label>Categoria</label>
                <select id="category" name="category" class="formulari-crear">
                  @foreach ($categories as $category)
                  @if ( old('category',$category->id) == $proposal->id_category_proposal_project)
                  <option selected="selected" value={{ $category->id}}>{{$category->category}}</option>
                  @else
                  <option value={{ $category->id}}>{{$category->category}}</option>
                  @endif
                  @endforeach
                </select>
                
                <label>Usuari</label>
                <select name="creator" id="creator" name="creator" class="formulari-crear">
                  @foreach ($users as $user)
                  @if ( old('creator',$user->id) == $proposal->id_creator)
                  <option selected="selected" value={{ $user->id}}>{{$user->name}} {{$user->last_name}}</option>
                  @else
                  <option value={{ $user->id}}>{{$user->name}} {{$user->last_name}}</option>
                  @endif
                  @endforeach
                </select>
                
                <label>Estat</label>
                <select name="state" id="state" name="state" class="formulari-crear">
                  @foreach ($states as $state)
                  @if ( old('state',$state->id) == $proposal->id_state_proposal_project)
                  <option selected="selected" value={{ $state->id}}>{{$state->state}}</option>
                  @else
                  <option value={{ $state->id}}>{{$state->state}}</option>
                  @endif
                  @endforeach
                </select>   
                         
                
                <label>Imatge</label>
                <input type="file" id="image" name="image" accept="image/png, .jpeg, .jpg" class="formulari-crear" value="{{ old('image',$proposal->image) }}"/>
            </div>
            <div class="col-md-6 margin-left-formulari">
                <label>Descripcio<span class="text-danger">*</span></label>
                <textarea placeholder="Descripció" maxlength="1000" id="description" name="description" class="formulari-crear-textarea">{{ old('description',$proposal->description) }}</textarea>
                @error('description')
                    <small><p class="error">*{{ $message }}</p></small>
                @enderror
            </div>

            <button class="formulari-send btn btn-action" type="submit">Actualitzar</button>
        </div>
    </form>
</div>
@endsection