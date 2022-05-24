@extends('templatePublic')

@section('title', 'InitLab')

@section('content')

<div class="container info margin-top-login">
    <div class="row">
        <article class="col-xs-12 maincontent">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Registra un nou compte</h3>
                        <p class="text-center text-muted">Si ja tens un compte entra <a href="{{ route('public.login') }}">aqui</a>.</p>
                        <hr>

                        <form action="{{ route('public.register.store') }}" method="post">
                            @csrf

                            <div class="top-margin">
                                <label>Nom <span class="text-danger">*</span></label>
                                <input name="name" id="name" type="text" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label>Cognom <span class="text-danger">*</span></label>
                                <input name="last_name" id="last_name" type="text" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label>Email <span class="text-danger">*</span></label>
                                <input name="email" id="email" type="email" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label>DNI/NIE <span class="text-danger">*</span></label>
                                <input name="id_card" id="id_card" type="text" class="form-control">
                            </div>

                            <div class="row password-display top-margin">
                                <div class="col-pass-6 padding-right-pass">
                                    <label>Contrasenya <span class="text-danger">*</span></label>
                                    <input name="password" id="password" type="password" class="form-control">
                                </div>
                                <div class="col-pass-6 padding-left-pass top-margin-pass">
                                    <label>Confirma contrasenya <span class="text-danger">*</span></label>
                                    <input name="password_confirmation" id="password_confirmation" type="password" class="form-control">
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-8">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        Acepto els <a href="page_terms.html">Termes i condicions</a>
                                    </label>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-action" type="submit">Registrar</button>
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
