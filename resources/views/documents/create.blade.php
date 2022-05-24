@extends('templateAdmin')
@section('head')
<script src="{{ asset('js/Document.js') }}" defer></script>

@section('title', 'Crear Document')

@section('content')

<div class="container info margin-top">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('documents.index') }}">Documents</a></li>
      <li class="breadcrumb-item active" aria-current="page">Crear document</li>
    </ol>
    </nav>

    <div class="titol-update">
      <div id="nomTitol">
          <h2 class="thin">Creació d'un document</h2>
      </div>
    </div>
    <hr class="margin-hr">

    <form enctype="multipart/form-data" action="{{ route('documents.store') }}" method="post" class="formulari">
      @csrf

      <div class="row formulari">
        <div class="col-md-6">

          <label>Document:<span class="text-danger">*</span></label>
          <input type="file" id="name" name="file" class="formulari-crear" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip" value="{{old('name')}}">


          @error('name')
              <br>
              <small>{{$message}}</small>
              <br><br>
          @enderror

          <label>Tipus:<span class="text-danger">*</span></label>
          <select name="id_document_type" id="id_document_type" class="formulari-crear value="{{old('id_document_type')}}"">
            @foreach ($types as $type)
              <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
          </select>

          @error('id_document_type')
              <br>
              <small>{{$message}}</small>
              <br><br>
          @enderror

          <label>Projecte:<span class="text-danger">*</span></label>
          <select name="id_project" id="id_project" class="formulari-crear value="{{old('id_project')}}"">
            @foreach ($projects as $project)
              <option value="{{$project->id}}">{{$project->title}}</option>
            @endforeach
          </select>

          <!--<input type="text" placeholder="projecte" id="id_project" name="id_project" class="formulari-crear" value="{{old('id_project')}}"/>-->

          <label>Usuari:<span class="text-danger">*</span></label>
                <select name="id_user" id="id_user" class="formulari-crear" value="{{old('id_user')}}">
                  @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                  @endforeach
                </select>
          <!--<input type="text" placeholder="usuari" id="id_user" name="id_user" class="formulari-crear" value="{{old('id_user')}}"/>-->

            @if (count($errors) > 0)
                <div class="error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <button class="formulari-send btn btn-action" type="submit">Crear</button>
      </div>
    </form>
</div>
  </div>
@endsection
