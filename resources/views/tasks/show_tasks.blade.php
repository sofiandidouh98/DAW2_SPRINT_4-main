@extends('templateUser')
@section('head')
<script src="{{ asset('js/Task.js') }}" defer></script>
<script>
    /* JS can read a laravel route, so the function has to be here, because
    the simple url is not working... So good luck with the task manager :P*/
    function asyncChangeState(id,id_state){
    /* async call */
    $.ajax({
            url: '{{ route('taskState.change') }}',
            method: 'PUT',
            data:{
                id: id,
                id_task_state: id_state
            },
        }).done(function(res){
        });
    }
</script>
@section('title', 'Tasques')

@section('content')  

<div class="container info margin-top">  
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('indexAdmin.list') }}">Projectes</a></li>
      <li class="breadcrumb-item"><a href="{{route('projectAdmin.show',$project)}}">Projecte</a></li>
      <li class="breadcrumb-item active">Tasques</li>
      <li class="breadcrumb-item" aria-current="page"><a href="{{ route('tasks.create',$project) }}">Crear tasca</a></li>
    </ol>
    </nav>
  
    <div class="titol-create">
        <div id="nomTitol">
            <h2 class="thin">Gestor de tasques</h2>
        </div>
        <div id="divAfegir">
            <a class="add" href="{{ route('tasks.create',$project) }}"><i class="fa fa-plus fa-lg"></i></a>
        </div>
    </div>
    <hr class="margin-hr">
    <br>

<div id="tasks-table"><div class="tasks-general">
    <table class="task-column-header center">
        <th class="center">PENDENT</th></table>
        <table class="task-column-header center">
        <th class="center">EN PROCÉS</th></table>
        <table class="task-column-header center">
        <th class="center">FET</th></table>
        </div>
        <div class="tasks-general">
            <div id="todo"
            class="tasks-dropzone"
                    ondragover="onDragOver(event);"
                    ondrop="onDrop(event);">
        
        @foreach ($todo as $task)<!--looking for all the tasks-->
            <!--printing all the task with a link refering to his ID-->
            <a href="{{route('task.show',$task->id)}}"><div id={{$task->id}} class="tasks-draggable task todo" draggable="true" ondragover="noAllowDrop(event)"
                ondragstart="onDragStart(event);" data-toggle="popover" data-content="{{$task->description}}">
                {{$task->name}}
            </div></a>
        @endforeach

        </div>
        <div id="inprogress"
        class="tasks-dropzone"
                ondragover="onDragOver(event);"
                ondrop="onDrop(event);">
                @foreach ($inprogress as $task)<!--looking for all the tasks-->
                <!--printing all the task with a link refering to his ID-->
                <a href="{{route('task.show',$task->id)}}"><div id={{$task->id}} class="tasks-draggable task inprogress" draggable="true" ondragover="noAllowDrop(event)"
                    ondragstart="onDragStart(event);" data-toggle="popover" data-content="{{$task->description}}">
                    {{$task->name}}
                </div></a>
            @endforeach
    
    </div>
    <div id="done"
        class="tasks-dropzone"
                ondragover="onDragOver(event);"
                ondrop="onDrop(event);">
                @foreach ($done as $task)<!--looking for all the tasks-->
                <!--printing all the task with a link refering to his ID-->
                <a href="{{route('task.show',$task->id)}}"><div id={{$task->id}} class="tasks-draggable task done" draggable="true" ondragover="noAllowDrop(event)"
                    ondragstart="onDragStart(event);" data-toggle="popover" data-content="{{$task->description}}">
                    {{$task->name}}
                </div></a>
            @endforeach
    
    </div>
    </div>
</div></div>
@endsection