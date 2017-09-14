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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>

    {{-- <link rel="stylesheet" href="{{ asset('assets/prism.css') }}">

    {{--Ckeditor--}}
    {{-- <script src="{{ asset('assets/prism.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script> --}}
</head>
<body>
    <div id="app">
      <div id="nav-home">
        <div id="nav-top" class="container text-center">
          <a href="{{ url('/') }}"><h1 class="nav-header hidden-xs">CODESUPPLY.io</h1></a>
          <a href="{{ url('/') }}"><h2 class="nav-header visible-xs">CODESUPPLY.io</h2></a>
          <h4>Specialized Coding Tutorials</h4>

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
                        <li> <a href="{{ route('search') }}"><i class="fa fa-search" aria-hidden="true"></i></a> </li>
                          {{--  <li class="dropdown visible-xs">
                              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  Categories<span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a href="{{ route('category.showRecent') }}">All</a></li>
                                  <li><a href="{{ route('category.show', 1) }}">Frontend</a></li>
                                  <li><a href="{{ route('category.show', 2) }}">Backend</a></li>
                                  <li><a href="{{ route('category.show', 3) }}">Fullstack</a></li>
                              </ul>
                          </li>  --}}
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

        <!-- Begin MailChimp Signup Form -->

{{--  <div id="mc_embed_signup">
<form action="//codesupplyio.us16.list-manage.com/subscribe/post?u=8f11746183ea24a92ef5609d9&amp;id=8a40ed0bb4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8f11746183ea24a92ef5609d9_8a40ed0bb4" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>  --}}

<!--End mc_embed_signup-->

    
        <div class="" id="footer">
        {{--  <div class="header__bg"></div>  --}}
            <div class="container">
                <div class="col-sm-8 contact-section">
                    <a href="" class="col-md-2 col-sm-12 text-center">CONTACT</a>
                    <a href="" class="col-md-2 col-sm-12 text-center">INSTAGRAM</a>
                    <a href="" class="col-md-2 col-sm-12 text-center">GITHUB</a>
                    <a href="" class="col-md-2 col-sm-12 text-center">TWITTER</a>
                    {{--  <a id="open-popup" class="col-md-4 text-center">Subscribe to Our Mailing List</a>  --}}
                </div>
                {{--  <div class="col-sm-4" id="mc_embed_signup">
                    <form action="//codesupplyio.us16.list-manage.com/subscribe/post?u=8f11746183ea24a92ef5609d9&amp;id=8a40ed0bb4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                        <label for="mce-EMAIL">Subscribe to our mailing list</label>
                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8f11746183ea24a92ef5609d9_8a40ed0bb4" tabindex="-1" value=""></div>
                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                        </div>
                    </form>
                </div>  --}}
                <div class="col-sm-4">
                  {{-- {!! Form::open(array('route' => 'post.subscribe', 'id' => 'signUpForm')) !!}
                  {!! Form::open(array('id' => 'signUpForm')) !!}
                    {{ csrf_field() }}
                    <div class="col-xs-12">
                      {{ Form::label('signUpEmail', 'Sign Up For Email Updates:', ['class' => 'col-xs-12']) }}
                      {{ Form::email('signUpEmail', null, array('class' => 'col-xs-9', 'placeholder' => 'Email')) }}
                      {{ Form::submit('Submit', ['class' => 'col-xs-3 submit']) }}
                    </div>
                  {!! Form::close() !!} --}}
                    <form action="//codesupplyio.us16.list-manage.com/subscribe/post?u=8f11746183ea24a92ef5609d9&amp;id=8a40ed0bb4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

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

    </div>
    {{--  <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
    <script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us16.list-manage.com","uuid":"8f11746183ea24a92ef5609d9","lid":"8a40ed0bb4"}) })</script>  --}}
   
    <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
    <script type="text/javascript">
      require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us16.list-manage.com","uuid":"8f11746183ea24a92ef5609d9","lid":"8a40ed0bb4"}) });

      function showMailingPopUp() {
        console.log('clicked');
        require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us16.list-manage.com","uuid":"8f11746183ea24a92ef5609d9","lid":"8a40ed0bb4"}) });
        document.cookie = "MCEvilPopupClosed=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
        document.cookie = 'MCPopupClosed=;path=/;expires=Thu, 01 Jan 1970 00:00:00 UTC;';
        document.cookie = 'MCPopupSubscribed=;path=/;expires=Thu, 01 Jan 1970 00:00:00 UTC;';
      };

      document.getElementById("open-popup").onclick = function() {showMailingPopUp()};
    </script>






    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
