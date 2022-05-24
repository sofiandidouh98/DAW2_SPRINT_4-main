<!DOCTYPE html>
<html lang="en">
    @include('layout.head')
    <body class="home">
        <div class="navbar navbar-inverse navbar-fixed-top headroom">
            @include('layout.headerPublic')
            @include('layout.navbarPublic')
        </div>
    <!--header-->
    <!--nav-->
    @yield('content')

    <!--footer-->
    <footer id="footer" class="top-space">
        @include('layout.footer1')
        @include('layout.footer2')
    </footer>
    <!--script-->
    @include('layout.script')
    </body>
</html>