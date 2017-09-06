<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CodeSupply</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('assets/prism.css') }}">

    {{--Ckeditor--}}
    {{-- <script src="{{ asset('assets/prism.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script> --}}
</head>
<body>
    <div id="app">
      <div id="nav-home">
        <div id="nav-top" class="container text-center">
          <a href="{{ url('/') }}"><h1 class="nav-header">CODESUPPLY.i<span class="">o</span></h1></a>
        </div>

          <nav  class="navbar navbar-default navbar-static-top">
              <div class="container">
                  <div class="navbar-header">
                      <!-- Collapsed Hamburger -->
                      <button type="button" class="navbar-toggle  collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">

                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="sr-only">Toggle Navigation</span>
                      </button>

                      <!-- Branding Image -->
                      {{-- test --}}


                      <a class="navbar-brand visible-xs" href="{{ url('/') }}">
                          CODESUPPLY
                      </a>
                  </div>

                  <div class="collapse navbar-collapse" id="app-navbar-collapse">
                      <!-- Left Side Of Navbar -->
                      {{-- <ul class="nav navbar-nav">
                          &nbsp;<li><a class="navbar-brand hidden-xs" href="{{ url('/') }}">
                                  CODE SUPPLY
                              </a></li>
                      </ul> --}}
                      <ul class="nav navbar-nav">
                        <li><a class="nav-bounce" href="{{ route('category.showRecent') }}">All</a></li>
                        <li><a class="nav-bounce-1" href="{{ route('category.show', 1) }}">Frontend</a></li>
                        <li><a class="nav-bounce-2" href="{{ route('category.show', 2) }}">Backend</a></li>
                        <li><a class="nav-bounce-3" href="{{ route('category.show', 3) }}">Fullstack</a></li>
                      </ul>

                      <!-- Right Side Of Navbar -->
                      <ul class="nav navbar-nav navbar-right">
                          <li class="dropdown visible-xs">
                              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  Categories<span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a href="{{ route('category.showRecent') }}">All</a></li>
                                  <li><a href="{{ route('category.show', 1) }}">Frontend</a></li>
                                  <li><a href="{{ route('category.show', 2) }}">Backend</a></li>
                                  <li><a href="{{ route('category.show', 3) }}">Fullstack</a></li>
                              </ul>
                          </li>
                          <!-- Authentication Links -->
                          @if (Auth::guest())
                              <li><a href="{{ route('login') }}">Admin Login</a></li>
                              {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
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
        </div>

        @yield('content')

        <div class="clearfix"></div>

        <div class="" id="footer">
            <div class="container">
                <div class="col-sm-8 contact-section hidden-xs">
                    <a href="" class="col-md-3">Contact</a>
                    <a href="" class="col-md-3">Instagram</a>
                    <a href="" class="col-md-3">Github</a>
                    <a href="" class="col-md-3">Twitter</a>
                </div>
                <div class="col-sm-4">
                  {!! Form::open(array('route' => 'post.subscribe', 'id' => 'signUpForm')) !!}
                    {{ csrf_field() }}
                    <div class="col-xs-12">
                      {{ Form::label('signUpEmail', 'Sign Up For Email Updates:', ['class' => 'col-xs-12']) }}
                      {{ Form::email('signUpEmail', null, array('class' => 'col-xs-9', 'placeholder' => 'Email')) }}
                      {{ Form::submit('Submit', ['class' => 'col-xs-3 submit']) }}
                    </div>
                  {!! Form::close() !!}

                    {{-- <form id="signUpForm">
                        <div class="col-xs-12">
                            <label for="signUpEmail" class="col-xs-12">Sign Up For Email Updates</label>
                            <input type="email" id="signUpEmail" class="col-xs-9" placeholder="Email">
                            <button type="submit" class="col-xs-3">Submit</button>
                        </div>
                    </form> --}}
                </div>
            </div>
        </div>
        {{--<div id="lower-footer">--}}
            {{--<h4>2017 Code Supply Media</h4>--}}
        {{--</div>--}}

    </div>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>