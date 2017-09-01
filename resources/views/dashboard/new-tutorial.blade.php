@extends('layouts.dash')


@section('menu')
  <div class="menu-item">
    <a class="" href="{{route('dash.getTutorials')}}">Tutorials</a>
  </div>
  <div class="menu-item">
    <a class="active" href="{{route('dash.newTutorial')}}">New Tutorial</a>
  </div>




@endsection


@section('content')
  <div>
    <h2 class="col-xs-12 text-center">New Tutorial</h2>

    {!! Form::open(array('route' => 'post.store', 'files' => true)) !!}
    {{ csrf_field() }}
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

  </div>
@endsection
