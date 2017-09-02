{{-- @extends('layouts.app')

@section('content')

<h1>Are you sure you want to delete this post?</h1>

<div class="col-xs-12">
	<div class="container" id="content-container">
		<img class="" src="{{ $singlePost->image_url }}" alt="">
		<div class="container">
			<h1>{{ $singlePost->title }}</h1>
			<h5>{{ $user->name }} / {{ $singlePost->created_at->format('M d Y') }}</h5>
			{!! $singlePost->body !!}
		</div>
		<div class="container">


			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-105618306-1', 'auto');
			  ga('send', 'pageview');

			</script>

		</div>


	</div>
</div>

@endsection --}}


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
    <h2 class="col-xs-12 text-center">Edit Tutorial</h2>

    {!! Form::open(['route' => ['dash.putEditPost', $singlePost->id], 'method' => 'put', 'files' => true]) !!}
    {{ csrf_field() }}
          {{ Form::label('title', 'Title:') }}
          {{ Form::text('title', $singlePost->title , array('class' => 'form-control')) }}

          {{ Form::label('body', 'Body:') }}
          {{ Form::textarea('body', $singlePost->body, array('class' => 'form-control')) }}

          {{--{{ Form::label('image', 'Thumbnail Image:') }}--}}
					<img src="{{ $singlePost->image_url }}" style="width: 30%;" alt="">
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
