@extends('templateUser')
@section('head')
<script src="{{ asset('js/Task.js') }}" defer></script>

@section('title', 'Tasques')

@section('content')  
            
    <div class="container info margin-top">  
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="">Projectes</a></li>
        <li class="breadcrumb-item"><a href="{{-- {{ route('tasks.index') }} --}}">Tasques</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$task->name}}</li>
        </ol>
        </nav>

                <br><h4>Editar tasca</h4>
            
            
            <form id="editTask" action="{{route('task.update', $task)}}" method="post">

                    @csrf
                    @method('patch')
                
                        
                    <label>Nom<span class="text-danger">*</span></label>
                    <input type="text" placeholder="Nom" id="taskname" name="taskname" class="formulari-crear" value="{{$task->name}}" />
                    <p class="error" id="errortaskname"></p>
                    @error('taskname')
                    
                    <small>*{{$message}}</small>
                    
                    @enderror
                    <label>Descripció<span class="text-danger">*</span></label>
                    <input type="text" placeholder="Afegeix una descripció" id="taskdesc" name="taskdesc" class="formulari-crear" value="{{$task->description}}"/>
                    <p class="error" id="errortaskdesc"></p>
                    @error('taskdesc')
                    
                    <small>*{{$message}}</small>
                    
                    @enderror
                    <label>Creada per:</label>
                    <select id="taskCreatedBy" name="taskCreatedBy" class="formulari-crear">
                        @foreach ($users as $user)
                                <option value="{{$user['id']}}">{{$user['name']}} {{$user['last_name']}}</option>
                        @endforeach
                    </select>
                    <label>Projecte:</label>
                    <select id="taskIDproject" name="taskIDproject" class="formulari-crear">
                        @foreach ($projects as $pro)
                                <option value="{{$pro['id']}}">{{$pro['title']}}</option>
                        @endforeach
                    </select>
                    <label>Estat de la tasca<span class="text-danger">*</span></label>
                    <select id="taskState" name="taskState" class="formulari-crear">
                        @foreach ($states as $state)
                                <option value="{{$state['id']}}">{{$state['state']}}</option>
                        @endforeach
                    </select>
                    <label>Data Inici<span class="text-danger"> *</span></label>
                    <input type="datetime-local" placeholder="Data inici" id="startdate" name="startdate" class="formulari-crear" value="{{$task->start_date}}"/>

                    <label>Data Final<span class="text-danger"> *</span></label>
                    <input type="datetime-local" placeholder="Data final" id="enddate" name="enddate" class="formulari-crear" value="{{$task->end_date}}"/>
                    
                    <label>Temps estimat</label>
                    <input type="text" placeholder="Temps estimat" id="taskEstimatedTime" name="taskEstimatedTime" class="formulari-crear" value="{{$task->estimated_time_in_minutes}}" />
                    <br><br>
                    <button type="button" class="btn btn-primary" id="confirmEditTask" onclick="Task.checkTask();return false;">Editar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.history.back();">Cancel·lar</button>
                
            </form>
            
                
            
        
    </div>
@endsection