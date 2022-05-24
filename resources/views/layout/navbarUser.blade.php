<div class="navbar-blue">
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav left">
            <li><a href="dashboardUsuaris.php">Home</a></li>
            <li><a href="./areaPrivada.php">Àrea privada</a></li>
            <li><a href="{{ route('proposals.index') }}">Propostes</a></li>
            <li><a href="{{ route('indexAdmin.list') }}">Projectes</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recursos<b class="caret"></b></a>
                <ul class="dropdown-menu dropdown-recursos">
                    <li><a href="maquina.php">Màquines</a></li>
                    <li><a href="material.php">Material</a></li>
                </ul>
            </li>
            <li><a href="incidencia.php">Incidències</a></li>
            <li><a href="reserva.php">Reserves</a></li>
        </ul>
    </div>
</div>

<script>
    $(".nav navbar-nav left").on("click", function() {
        $(li).find(".active").removeClass("active");
        $(this).addClass("active");
    });
</script>