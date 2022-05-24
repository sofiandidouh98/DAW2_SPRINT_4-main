@extends('templateAdmin')
<script src="{{ asset('js/classes/Message.js')}}" defer></script>
@section('title','Crear un missatge')

@section('content')
    
    <div class="container info margin-top">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('message.index') }}">Missatges</a></li>
        <li class="breadcrumb-item active" aria-current="page">Crear missatge</li>
        </ol>
        </nav>

        <div class="titol-update">
        <div id="nomTitol">
            <h2 class="thin">Creació d'un missatge</h2>
        </div>
        </div>
        <hr class="margin-hr">
    
    <form action="{{route('message.store')}}" method="POST" class="formulari">

        @csrf

        <div class="row formulari">
            <div class="col-md-6">

                <label>Assumpte:<span class="text-danger">*</span></label>
                <input type="text" placeholder="Assumpte" id="subject" name="subject" class="formulari-crear" value="{{old('subject')}}"/>
                <p class="messagesubject" id="errorMessageSubjectAdmin"></p> 
                @error('subject')
                    <small>{{$message}}</small>
                    <br>
                  @enderror

                <label>Enviat per:<span class="text-danger">*</span></label>

                <select name="sent_by" id="sent_by" class="formulari-crear">
                  @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                  @endforeach
                </select>
                  @error('sent_by')
                  <br>
                  <small>{{$message}}</small>
                  <br>
                @enderror

            </div>
            <div class="col-md-6 margin-left-formulari">
                <label>Contingut<span class="text-danger">*</span></label>
                <textarea placeholder="Contingut" maxlength="1000" id="content" name="content" class="formulari-crear-textarea">{{old('content')}}</textarea>
                  @error('content')
                  <br>
                  <small>{{$message}}</small>
                  <br>
                @enderror
              </div>
                <button class="formulari-send btn btn-action" type="submit">Crear</button>
              </div>
            </form>
          </div>
@endsection