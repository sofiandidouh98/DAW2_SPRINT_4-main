@extends('templateUser')
@section('head')
<script src="{{ asset('js/Task.js') }}" defer></script>

@section('title', 'Tasques')

@section('content')  
            
<div class="container info margin-top">  
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('indexAdmin.list') }}">Projectes</a></li>
    <li class="breadcrumb-item"><a href="{{ route('tasks.index',$project) }}">Tasques</a></li>
    <li class="breadcrumb-item active" aria-current="page">Crear tasca</a></li>
    </ol>
    </nav>
                <br>
                <h4>Crear tasca</h4>
            
            
            <form id="addTask" action="{{route('tasks.store',$project)}}" method="post">

                    @csrf
                <div class="row formulari">
                <div class="col-md-6"> 
                    <label>Nom<span class="text-danger">*</span></label>
                    <input type="text" placeholder="Nom" id="taskname" name="taskname" class="formulari-crear" value="{{old('taskname')}}" />
                    <p class="error" id="errortaskname"></p>
                    
                    @error('taskname')
                    <small>*{{$message}}</small>
                    @enderror
                    

                    <label>Creada per:</label>
                    {{-- <input type="text" placeholder="1,2,3.." id="taskCreatedBy" name="taskCreatedBy" class="formulari-crear"/> --}}
                    <select id="taskCreatedBy" name="taskCreatedBy" class="formulari-crear">
                        @foreach ($users as $user)
                                <option value="{{$user['id']}}">{{$user['name']}} {{$user['last_name']}}</option>
                        @endforeach
                    </select>
                    <label>Estat de la tasca<span class="text-danger">*</span></label>
                    <select id="taskState" name="taskState" class="formulari-crear">
                        @foreach ($states as $state)
                                <option value="{{$state['id']}}">{{$state['state']}}</option>
                        @endforeach
                    
                    </select>
                    <label>Data Inici</label>
                    <input type="datetime-local" id="startdate" name="startdate" class="formulari-crear" value="{{old('startdate')}}"/>

                    <label>Data Final</label>
                    <input type="datetime-local" id="enddate" name="enddate" class="formulari-crear" value="{{old('enddate')}}"/>
                    
                    
                    <label>Temps estimat</label>
                    <input type="text" placeholder="Temps estimat" id="taskEstimatedTime" name="taskEstimatedTime" class="formulari-crear" value="{{old('taskEstimatedTime')}}" />
                    <br><br>
                </div>

                <div class="col-md-6 margin-left-formulari">
                    <label>Descripció</label>
                    <textarea placeholder="Descripció" maxlength="1000" id="taskdesc" name="taskdesc" class="formulari-crear-textarea" value="{{old('taskdesc')}}"></textarea>
                    <p class="error" id="errortaskdesc"></p>
                    </div>
                    @error('taskdesc')
                    <small>*{{$message}}</small>
                    @enderror
                    <button type="button" class="btn btn-primary" onclick="Task.checkTask();return false;" id="confirmTask">Crear</button>                
            </form>

        </div> 
    </div>
@endsection