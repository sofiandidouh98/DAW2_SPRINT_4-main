<div class="navbar-blue">
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav left">
            <li class="active"><a href="{{ route('layouts.dashboard') }}">Home</a></li>
            <li><a href="{{ route('administrators.index') }}">Administradors</a></li>
            <li><a href="{{ route('users.index') }}">Usuaris</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recursos<b class="caret"></b></a>
                <ul class="dropdown-menu dropdown-recursos">
                    <li><a href="">Màquines</a></li>
                    <li><a href="">Material</a></li>
                </ul>
            </li>
            <li><a href="{{ route('incidents.index') }}">Incidències</a></li>
            <li><a href="{{ route('indexAdmin.list') }}">Projectes</a></li>
            <li><a href="{{ route('proposals.indexAdmin') }}">Propostes</a></li>
            <li><a href="{{ route('documents.index') }}">Documents</a></li>
            <li><a href="">Incidències</a></li>
            <li><a href="">Reserves</a></li>
            <li><a href="">Factures</a></li>
        </ul>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('click', '.nav li', function (e) {
            $(".nav").find(".active").removeClass("active");
            $(this).addClass("active");
        });
    });

</script>