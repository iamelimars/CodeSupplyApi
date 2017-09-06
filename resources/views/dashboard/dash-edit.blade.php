@extends('layouts.dash')

@section('menu')
  <div class="menu-item">
    <a class="" href="{{route('dash.getTutorials')}}">Tutorials</a>
  </div>
  <div class="menu-item">
    <a class="" href="{{route('dash.newTutorial')}}">New Tutorial</a>
  </div>
  <div class="menu-item">
    <a class="active">Edit Tutorial</a>
  </div>

@endsection


@section('content')
  <div>
    @if ($message)
      <div class="alert alert-success" role="alert">{{ $message }}</div>
    @endif

    <h2 class="col-xs-12 text-center">Edit Tutorial</h2>

    {!! Form::open(['route' => ['dash.putEditPost', $singlePost->id], 'method' => 'put', 'files' => true]) !!}
    {{ csrf_field() }}
          {{ Form::label('title', 'Title:') }}
          {{ Form::text('title', $singlePost->title , array('class' => 'form-control')) }}

          {{ Form::label('body', 'Body:') }}
          {{ Form::textarea('body', $singlePost->body, array('class' => 'form-control')) }}
          <br>

          {{--{{ Form::label('image', 'Thumbnail Image:') }}--}}
					<img src="{{ $singlePost->image_url }}" style="width: 30%;" alt="">
          <br>
          <br>
          {{ Form::file('image') }}
					<br>
					{{ Form::label('newImage', 'New Image Being Uploaded?') }}
					{{ Form::checkbox('newImage', 'new-image') }}
					<br>

          {{ Form::label('category', 'Category:') }}
          {{ Form::select('category',[
                  'Categories' => [
                      1 => 'Frontend',
                      2 => 'Backend',
                      3 => 'Fullstack'
                      ]
          ], $singlePost->category_id, ['placeholder' => 'Pick a category']) }}

          {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
    {!! Form::close() !!}

  </div>
@endsection
