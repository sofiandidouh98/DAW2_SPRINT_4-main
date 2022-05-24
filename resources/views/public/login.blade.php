@extends('templatePublic')

@section('title', 'InitLab')

@section('content')

<div class="container info margin-top-login">
    <div class="row">
        <article class="col-xs-12 maincontent">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Inicia sessió</h3>
                        <p class="text-center text-muted">Si no tens un compte el pots crear ràpidament <a href="{{ route('public.register') }}">aquí</a>, si ja en tens un entra al teu compte i posa't mans a la feina </p>
                        <hr>

                        <form action="{{ route('public.login.store') }}" method="post">
                            @csrf
                            <div class="top-margin">
                                <label>Correu electrònic<span class="text-danger">*</span></label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label>Contrasenya <span class="text-danger">*</span></label>
                                <input type="password" name="password" id="password" class="form-control">

                                @error('message')
                                    <br><p class="error" id="errorpassword">*{{$message}}</p>
                                @enderror

                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-8">
                                    <b><a href="">Has olvidat la contrasenya?</a></b>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-action" type="submit">Entrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>

@endsection
