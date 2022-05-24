@extends('templateAdmin')

@section('title','Missatge ' . $message->id)

@section('content')

<script>

    function eliminarMissatge(message) {
        document.getElementById("message-subject").innerHTML = message.subject;
        document.getElementById("message").value = message.id;

        $('#modalDeMissatges').modal({
            backdrop: 'static',
            keyboard: false
        })
    }

</script>

<div class="container info margin-top">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('message.index') }}">Missatges</a></li>
    <li class="breadcrumb-item active" aria-current="page">Missatge</li>
    </ol>
    </nav>


    <tr>
        <a href="{{route('message.show', $message)}}">
        <div style="height:100%;width:100%">{{$message->title}}  </div>
        </a>
    </td-->
    <h1>Assumpte: {{$message->subject}}</h1><br>
    <p><strong> Contingut: </strong><br><br>{{$message->content}}</p><br>
    <p><strong>Enviat a: </strong>{{$message->sent_at}}</p>
    <p><strong>Enviat per: </strong>{{$message->sentBy->name}}</p><br>   


    <td><a href="{{route('message.edit', $message)}}" class="far fa-lg fa-edit edit-icon" id="icons-underline"></a></td>
    <td><a onclick="eliminarMissatge({{$message}})" class="far fa-lg fa-trash-alt trash-icon" id="icons-underline"></a></td>
</tr> 

    <div id="modalDeMissatges" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirma-ho</h4>
                </div>
                <form action="{{ route('message.destroy') }}" method="POST">
    
                    @csrf
                            
                    @method('delete')
    
                    <input id="message" name="id" hidden>
                    <div class="modal-body">
                        <p>Estàs segur de que vols esborrar aquest missatge <strong id="message-subject"></strong> ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-action" id="confirmarAdmin">Eliminar</button>
                        <button type="button" class="btn btn-secondary" id="cancel" data-dismiss="modal">Cancel·lar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection