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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-main navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                        {{--CodeSupply--}}
                    {{--</a>--}}
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;<li><a class="navbar-brand" href="{{ url('/') }}">
                                CODE SUPPLY
                            </a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
                                    <li>
                                      <a href="{{ route('home') }}">Dashboard</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <div class="" id="footer">
        {{--  <div class="header__bg"></div>  --}}
            <div class="container">
                <div class="col-lg-8 contact-section">
                    <a href="mailto:codesupplyio@gmail.com?Subject=CodeSupply.io" class="col-xs-12 text-center"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/codesupply.io/?hl=en" class="col-xs-12 text-center"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                    <a href="https://github.com/CodeSupplyio" class="col-xs-12 text-center"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>
                    {{--  <a href="" class="col-md-2 col-sm-12 text-center">TWITTER</a>  --}}
                    {{--  <a id="open-popup" class="col-md-4 text-center">Subscribe to Our Mailing List</a>  --}}
                </div>

                <div class="col-lg-4">
                  {{-- {!! Form::open(array('route' => 'post.subscribe', 'id' => 'signUpForm')) !!}
                  {!! Form::open(array('id' => 'signUpForm')) !!}
                    {{ csrf_field() }}
                    <div class="col-xs-12">
                      {{ Form::label('signUpEmail', 'Sign Up For Email Updates:', ['class' => 'col-xs-12']) }}
                      {{ Form::email('signUpEmail', null, array('class' => 'col-xs-9', 'placeholder' => 'Email')) }}
                      {{ Form::submit('Submit', ['class' => 'col-xs-3 submit']) }}
                    </div>
                  {!! Form::close() !!} --}}
                    <form action="//codesupplyio.us16.list-manage.com/subscribe/post?u=8f11746183ea24a92ef5609d9&amp;id=8a40ed0bb4" method="post"  id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate col-xs-12" target="_blank" novalidate>

                    {{--  <form id="signUpForm">  --}}
                      {{ csrf_field() }}
                        <div class="col-xs-12">
                            <label for="signUpEmail" class="col-xs-12">Sign Up For Email Updates</label>
                            <input type="email" id="mce-EMAIL signUpEmail" name="EMAIL" class="col-xs-9 email" placeholder="Email" required>
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8f11746183ea24a92ef5609d9_8a40ed0bb4" tabindex="-1" value=""></div>
                            <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="col-xs-3 submit">
                        </div>
                    </form>


                </div>
            </div>
        </div>
        <div id="lower-footer">
            <h4>2017 Code Supply Media</h4>
        </div>


        {{--  <div id="footer">
            <div class="container">
                <div class="col-sm-8 contact-section hidden-xs">
                    <a href="" class="col-md-3">Contact</a>
                    <a href="" class="col-md-3">Instagram</a>
                    <a href="" class="col-md-3">Github</a>
                    <a href="" class="col-md-3">Twitter</a>
                </div>
                <div class="col-sm-4">
                    <form id="signUpForm">
                        <div class="col-xs-12">
                            <label for="signUpEmail" class="col-xs-12">Sign Up For Email Updates</label>
                            <input type="email" id="signUpEmail" class="col-xs-9" placeholder="Email">
                            <button type="submit" class="col-xs-3">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div id="lower-footer">
            <h4>2017 Code Supply Media</h4>
        </div>  --}}

    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
