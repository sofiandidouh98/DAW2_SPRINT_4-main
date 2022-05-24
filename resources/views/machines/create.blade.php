@extends('templateAdmin')

@section('created_at', 'Maquines')

@section('content')
<script src="{{ asset('js/Machine.js') }}"></script>


<div class="container info margin-top">  
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('machines.index') }}">Màquines</a></li>
      <li class="breadcrumb-item active" aria-current="page">Crear màquina</li>
    </ol>
    </nav>
  
    <div class="titol-create">
        <div id="nomTitol">
            <h2 class="thin">Creació de màquines
            </h2>
        </div>
    </div>
    <hr class="margin-hr">
    <div class="content-machine">
       
        <form action="{{ route('machines.store') }}" method="post" class="formulari">
            @csrf
    
            <div class="row formulari">
              <div class="col-md-6">    
                 
                <label>Nom<span class="text-danger">*</span></label>
                <input type="text" placeholder="Nom" id="name" name="name" class="formulari-crear" value="{{old('name')}}"/>

                <label>Marca<span class="text-danger">*</span></label>
                <input type="text" placeholder="Marca" id="brand" name="brand" class="formulari-crear" value="{{old('brand')}}"/>

                <label>Model<span class="text-danger">*</span></label>
                <input type="text" placeholder="Model" id="model" name="model" class="formulari-crear" value="{{old('model')}}"/>

                <label>Descripció<span class="text-danger">*</span></label>
                <input type="text" placeholder="Descripció" id="description" name="description" class="formulari-crear" value="{{old('description')}}"/>

                <label>Preu<span class="text-danger"></span></label>
                <input type="text" placeholder="Preu" id="price" name="price" class="formulari-crear" value="{{old('price')}}"/>

                <label>Número de serie<span class="text-danger"></span></label>
                <input type="text" placeholder="Número de serie" id="serial_number" name="serial_number" class="formulari-crear" value="{{old('serial_number')}}"/>

                <label>Codi de barres<span class="text-danger"></span></label>
                <input type="text" placeholder="Codi de barres" id="bar_code" name="bar_code" class="formulari-crear" value="{{old('bar_code')}}"/>

                <label>Codi QR<span class="text-danger"></span></label>
                <input type="text" placeholder="Codi QR" id="qr_code" name="qr_code" class="formulari-crear" value="{{old('qr_code')}}"/>

                <label>Data d'inici<span class="text-danger"></span></label>
                <input type="text" placeholder="Data d'inici" id="starting_date" name="starting_date" class="formulari-crear" value="{{old('starting_date')}}"/>

                <label>Imatge<span class="text-danger"></span></label>
                <input type="text" placeholder="Imatge" id="image" name="image" class="formulari-crear" value="{{old('image')}}"/>

                
              </div>
    
              <div class="col-md-6 margin-left-formulari">
                <label>Notes<span class="text-danger">*</span></label>
                <textarea placeholder="Notes" maxlength="1000" id="notes" name="notes" class="formulari-crear-textarea" value="{{old('notes')}}"></textarea>
              </div>
    
              <button type="button" class="formulari-send btn btn-action" onclick="Machine.checkMachine();return false;">Crear màquina</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection


{{--
@extends('layouts.plantilla')

@section('title', 'Crear Màquina')

@section('content')
    <h1>Crea una màquina</h1>
    <form action="{{route('machines.store')}}" method="POST">
        
        @csrf
        
        <label>
            Nom: 
            <br>
            <input type="text" name="name"> 
        </label>
        
        <br>
        <label >
            Marca: 
            <br>
            <input type="text" name="brand">
        </label>

        <br>
        <label >
            Model: 
            <br>
            <input type="text" name="model">
        </label>
        
        <br>
        <label>
            Descripció: 
            <br>
            <textarea name="description" rows="5"></textarea>
        </label>
        <br>
        <button type="submit">Enviar Formulari</button>
    </form>
@endsection
--}}