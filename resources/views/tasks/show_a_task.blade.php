@extends('templateUser')

@section('title', 'Tasques')

@section('content')  
            
<div class="container info margin-top">  
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item"><a href="">Projectes</a></li>
      <li class="breadcrumb-item"><a href="{{ route('tasks.index',$task->id_project) }}">Tasques</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{$task->name}}</li>
    </ol>
    </nav>

<h2>{{$task->name}}</h2>
{{-- <a href="{{route('tasks.index')}}">Mostrar totes les tasques</a>
<br><br> --}}
<form action="{{route('task.destroy', $task)}}" method="POST">
    <a href="{{route('task.edit',$task)}}" class="btn btn-outline-info">Editar</a>
    @csrf
    @method('delete')
<button type="submit" class="btn btn-danger">Eliminar</button>
</form><br>
    <p>Descripció: {{$task->description}}</p>
    <p>Projecte: {{$task->id_project}} - {{$project[0]->title}}</p>
    <p>Inici: {{$task->start_date}}</p>
    <p>Final: {{$task->end_date}}</p>
    <p>Temps estimat: {{$task->estimated_time_in_minutes}}</p>
    <p>Estat: {{$state[0]->state}}</p>
</div>
@endsection