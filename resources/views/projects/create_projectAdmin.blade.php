@extends('templateAdmin')

@section('title','Projectes')
     
@section("content")

<script src="{{ asset('js/Project.js') }}"></script>

<div class="container info margin-top">  



    <form id="addProjectAdmin" action="{{route('projectesAdmin.save')}}" method="post">
        
        @csrf
        <br>
        <label>Nom del Projecte<span class="text-danger"> *</span></label>
        <input type="text" placeholder="Nom" id="projectname" name="projectname" class="formulari-crear" value="{{old('projectname')}}"/>
        <p class="error" id="errorProjectNameAdmin"></p>
        
{{--         @error('projectname')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror --}}
        <label>Localitat<span class="text-danger"> *</span></label>
        <input type="text" placeholder="Localitat" id="location" name="location" class="formulari-crear" value="{{old('location')}}" />
        <p class="error" id="errorProjectLocationAdmin"></p>

        {{--         @error('location')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror --}}
        
        <br>
        <label>Categoria<span class="text-danger"> *</span></label>
        <select id="category" name="category" class="formulari-crear">
                @foreach ($categories as $category)
                        <option value="{{$category['id']}}">{{$category['category']}}</option>

                @endforeach
        
        <br>
        </select>
        <label>Descripció<span class="text-danger"> *</span></label>
        <input type="text" placeholder="Descripció" id="description" name="description" class="formulari-crear" value="{{old('description')}}" />
        <p class="error" id="errorProjectDescriptionAdmin"></p>

        {{--         @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror --}}
        <br>
        <button type="button" class="btn btn-primary" onclick="Project.checkProject();return false;" id="confirmarProjecteAdmin">Crear</button>
</form>

</div>
@endsection