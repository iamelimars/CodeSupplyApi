@extends('layouts.dashboard')

@section('content')
<div class="row" id="admin-section">
    {{-- <div class="col-sm-2" id="admin-panel">
        <h3 class="col-md-12 text-center">Admin Panel</h3>
        

    </div> --}}
    {{-- <div class="col-sm-12" id="admin-dashboard">
        
    </div> --}}
    <div class="col-sm-12 bhoechie-tab-container">
    {{-- <h3 class="col-md-12 text-center">Admin Panel</h3> --}}

    <nav class="navbar navbar-default navbar-main navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav" id="dash-brand">
                        &nbsp;<li class=""><a class="navbar-brand text-center" href="{{ url('/') }}">
                                CODE SUPPLY
                            </a></li>
                    </ul>

                    
                    <div class="container">
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
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>

                    
                </div>
            </div>
        </nav>


            <div class="col-sm-2 col-xs-2 bhoechie-tab-menu">

              <div class="list-group">

                <a href="#" class="list-group-item active text-center">
                  <h4 class="glyphicon glyphicon-road"></h4><br/>New Tutorial
                </a>
                  <a href="#" class="list-group-item text-center">
                      <h4 class="glyphicon glyphicon-plane"></h4><br/>Tutorials
                  </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-home"></h4><br/>Adsense
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">

                <!-- New Tutorial section -->
                <div class="bhoechie-tab-content active">
                    <div>
                      <h2 class="col-xs-12 text-center" style="margin-top: 0;color:#55518a">New Tutorial</h2>

                      {!! Form::open(array('route' => 'post.store', 'files' => true)) !!}
                            {{ Form::label('title', 'Title:') }}
                            {{ Form::text('title', null, array('class' => 'form-control')) }}

                            {{ Form::label('body', 'Body:') }}
                            {{ Form::textarea('body', null, array('class' => 'form-control')) }}

                            {{--{{ Form::label('image', 'Thumbnail Image:') }}--}}
                            {{ Form::file('image') }}

                            {{ Form::label('category', 'Category:') }}
                            {{ Form::select('category',[
                                    'Categories' => [
                                        1 => 'Frontend',
                                        2 => 'Backend',
                                        3 => 'Fullstack'
                                        ]
                            ], null, ['placeholder' => 'Pick a category']) }}

                            {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
                      {!! Form::close() !!}




                       {{--<form>--}}
                          {{--{{ csrf_field() }}--}}
                          {{--<div class="form-group">--}}
                            {{--<label for="tutorial-title">Title</label>--}}
                            {{--<input type="text" class="form-control" id="tutorial-title" placeholder="Title">--}}
                          {{--</div>--}}
                          {{--<div class="form-group">--}}
                              {{--<label for="tutorial-body">Body</label>--}}
                              {{--<textarea class="form-control" rows="15" id="tutorial-body"></textarea>--}}
                          {{--</div>--}}
                          {{--<div class="form-group">--}}
                              {{--<button type="submit" class="btn btn-default">Sign in</button>--}}
                          {{--</div>--}}

                      {{--</form>--}}
                    </div>

                </div>

                <!-- All Tutorials section -->
                <div class="bhoechie-tab-content ">
                    <div>
                        <h2 style="margin-top: 0;color:#55518a">Tutorials</h2>
                    </div>
                </div>
    
                <!-- Adsense section -->
                <div class="bhoechie-tab-content">
                    <div class="col-xs-center">
                      <h2 class="col-xs-12 text-center" style="margin-top: 0;color:#55518a">Ad Sense</h2>
                    </div>
                </div>

            </div>
        </div>
</div>
@endsection
