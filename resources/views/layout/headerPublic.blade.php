<div class="navbar-color container padding-bottom padding-top">
    <div class="navbar-header header-width header2">
        <!--Botó para la pantalla petita-->
        <div class="button">
            <button id="boto-toggle" type="button" class="navbar-toggle navbar-size" data-toggle="collapse"
                data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span
                class="icon-bar"></span> </button>
        </div>
        <div class="fotos">
            <a class="navbar-brand" href="{{route('public.index')}}"><img class="imatge1" alt="LogoINomAplicatiuWeb"
                src="{{url('/images/LogoBlau1_2.png')}}"></a>
            <a class="navbar-brand margin-left-icon" href="{{route('public.index')}}"><img class="imatge2" alt="LogoAplicatiuWeb"
                src="{{url('/images/LogoBlau1_3.png')}}"></a>
        </div>
        <div class="searchbar">
            <ul class="nav navbar-nav center">
                <li><input class="searchbar-input" type="search" name="search" id="search"></li>
                <li><a class="button-search-bar margin-search"><span class="fa fa-search"></span></a></li>
            </ul>
        </div>
        <div class="area">
            <div class="nav navbar-nav right">
                <ul class="nav navbar-nav right">
                    <li><a class="btn margin-signin color-icones" href="{{ route('public.login') }}">SIGN IN / SIGN UP</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
