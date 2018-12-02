<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <!-- uikit -->
    <link rel="stylesheet" href="{{ asset('css/bower_components/uikit/css/uikit.almost-flat.min.css') }}" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="{{ asset('css/assets/icons/flags/flags.min.css') }}" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="{{ asset('css/assets/css/main.min.css') }}" media="all">

    <link rel="stylesheet" href="{{ asset('css/assets/css/login_page.min.css')}}" />

</head>
<body>
    <div id="app">
        <nav class="navbar nloginavbar-default navbar-static-top">
            <div class="container">


                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                       <!--      <li><a href="{{ route('login') }}">Login</a></li> -->
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
     <!--  <script src="{{ asset('js/app.js') }}"></script> -->

     <script src="{{ asset('css/assets/js/common.min.js')}}"></script>
    <!-- uikit functions -->
        <script src="{{ asset('css/assets/js/uikit_custom.min.js')}}"></script>
    <!-- altair common functions/helpers -->
         <script src="{{ asset('css/assets/js/altair_admin_common.min.js')}}"></script>

    <!-- page specific plugins -->
        <!-- d3 -->
        <script src="{{ asset('css/bower_components/d3/d3.min.js')}}"></script>
        <!-- metrics graphics (charts) -->
        <script src="{{ asset('css/bower_components/metrics-graphics/dist/metricsgraphics.min.js')}}"></script>
        <!-- chartist (charts) -->
<!--         <script src="{{ asset('css/bower_components/chartist/dist/chartist.min.js')}}"></script> -->
        <!-- maplace (google maps) -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="{{ asset('css/bower_components/maplace-js/dist/maplace.min.js')}}"></script>
        <!-- peity (small charts) -->
        <script src="{{ asset('css/bower_components/peity/jquery.peity.min.js')}}"></script>
        <!-- easy-pie-chart (circular statistics) -->
        <script src="{{ asset('css/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
        <!-- countUp -->
        <script src="{{ asset('css/bower_components/countUp.js/countUp.min.js')}}"></script>
        <!-- handlebars.js -->
        <script src="{{ asset('css/bower_components/handlebars/handlebars.min.js')}}"></script>
        <script src="{{ asset('css/assets/js/custom/handlebars_helpers.min.js')}}"></script>
        <!-- CLNDR -->
        <script src="{{ asset('css/bower_components/clndr/src/clndr.js')}}"></script>
        <!-- fitvids -->
        <script src="{{ asset('css/bower_components/fitvids/jquery.fitvids.js')}}"></script>
<!-- outros -->

    <script src="{{ asset('css/assets/js/pages/login.min.js')}}"></script>


        <!--  dashbord functions -->
     <!--    <script src="{{ asset('css/assets/js/pages/dashboard.min.js')}}"></script> -->


</body>
</html>
