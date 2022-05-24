<div class="navbar-color container padding-bottom padding-top">
    <div class="navbar-header header-width header">
            <!--Botó para la pantalla petita-->
        <div class="button">
            <button id="boto-toggle" type="button" class="navbar-toggle navbar-size" data-toggle="collapse"
                data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span
                class="icon-bar"></span> </button>
        </div>
        <div class="fotos">
            <a class="navbar-brand" href="/usuaris/dashboardUsuaris.php"><img class="imatge1" alt="LogoAplicatiuWeb"
                    src="{{url('/images/LogoBlau1_2.png')}}"></a>
            <a class="navbar-brand margin-left-icon" href="/usuaris/dashboardUsuaris.php"><img class="imatge2"
                    alt="LogoAplicatiuWeb" src="{{url('/images/LogoBlau1_3.png')}}"></a>
        </div>
        <div class="searchbar">
            <ul class="nav navbar-nav flex">
                <li><input class="searchbar-input" type="search" name="search" id="search"></li>
                <li><a class="button-search-bar"><span class="fa fa-search"></span></a></li>
            </ul>
        </div>
        <div class="area">
            <div class="nav navbar-nav right">
                <li class="dropdown"><a href="#"
                        class="user-registrat btn fas fa-lg fa-user dropdown-toggle color-icones"
                        data-toggle="dropdown"></a>
                    <ul class="dropdown-menu">
                        <li><a id="padding-top-dropdown" href="/usuaris/perfil.php">El meu perfil</a></li>
                        <li><a href="/usuaris/missatgeria.php">Missatgeria</a></li>
                        <li><a href="{{ route('public.login.destroy') }}">Logout</a></li>
                    </ul>
                </li>
            </div>
        </div>
    </div>
</div>
