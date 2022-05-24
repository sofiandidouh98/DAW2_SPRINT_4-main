@extends('templateAdmin')

@section('title', 'Documents' . $document->name)

@section('content')
      
<div class="container info margin-top">  
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('documents.index') }}">Documents</a></li>
      <li class="breadcrumb-item active" aria-current="page">Crear document</li>
    </ol>
    </nav>
</div>
    <h1>Nom: {{ $document->name }} </h1><br>
    <a href="{{ route('documents.index') }}">Tornar</a>
    <a href="{{ route('documents.edit', $document) }}">Editar</a>
    <p><strong>Data:</strong>{{ $document->created_at }}</p>
    <p><strong>Projecte:</strong>{{ $document->project->title }}</p>
    <p><strong>Creat per:</strong>{{ $document->user->name }}</p>

    <form action="{{ route('documents.destroy',$document) }}" method="POST">
        
        @csrf
        
        @method('delete')

        <button type="submit">Eliminar</button>
    </form>
@endsection