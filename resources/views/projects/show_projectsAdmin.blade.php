@extends('templateAdmin')

@section('title','Projectes')
@section('content')


<div class="container info margin-top">  


    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Projectes<a href="{{ route('indexAdmin.list') }}"></li>

    </ol>
    </nav>
    <br>
  
    <div class="titol-create">
        <div id="nomTitol">
            <h2 class="thin">Projectes</h2>
        </div>
        <div id="divAfegir">
            <a class="add" href="{{ route('projectesAdmin.create') }}"><i class="fa fa-plus fa-lg"></i></a>
        </div>
    </div>
<table id="tableProjectsAdmin" class="table table-striped nowrap">
    <thead class="thead-dark">
<!-- T -->
    <tr>
        <th id="no-border-top">Titol</th>
        <th id="no-border-top">Categoria</th>
        <th id="no-border-top">Localització</th>
        <th id="no-border-top">Descripció</th>
        <th id="no-border-top">Data</th>
        <th id="no-border-top">Editar</th>
        <th id="no-border-top">Eliminar</th>
    </tr>
    </thead>
@foreach ($projects as $project)
<tr>
<td><a href="{{route('projectAdmin.show',$project->id)}}">{{$project->title}}</a></td>
<td>{{$project->id_category_proposal_project}}</td>
<td>{{$project->location}}</td>
<td>{{$project->description}}</td>
<td>{{$project->created_at}}</td>
<td><a href="{{route('projectAdmin.edit',$project->id)}}" class="far fa-lg fa-edit edit-icon" id="icons-underline"></a></td>
<td><a >
    <form action="{{route('projectAdmin.delete', $project->id)}}" method="POST">
        @csrf
        @method('delete')
     <button type="submit" class="far fa-lg fa-trash-alt trash-icon" id="icons-underline"></button>
    </form><br>
    </td>
</tr>
@endforeach




</table>
</div>
@endsection
