@extends('layouts.dash')


@section('menu')
  <div class="menu-item">
    <a class="active" href="{{route('dash.getTutorials')}}">Tutorials</a>
  </div>
  <div class="menu-item">
    <a class="" href="{{route('dash.newTutorial')}}">New Tutorial</a>
  </div>
@endsection


@section('content')

  @foreach ($posts as $post)
    <div class="media ">
      <div class="col-md-10">
        <div class="media-left media-middle">
          <a href="{{ route('post.show', $post->id) }}">
            <img class="media-object" src="{{ $post->image_url }}" alt="{{ $post->title }}">
          </a>
        </div>
        <div class="media-body">
          <a href="{{ route('post.show', $post->id) }}"><h4 class="media-heading">{{ $post->title }}</h4></a>

          <p id="dash-body">{{ str_limit($post->body, 300) }}</p>
        </div>
      </div>
      <div class="col-md-2">
        <a class="col-xs-12" href="{{ route('post.show', $post->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
        <a class="col-xs-12" href="{{ route('dash.getEditPost', $post->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        <a class="col-xs-12" href="{{ route('dash.getDeletePost', $post->id) }}"><i class="fa fa-minus" aria-hidden="true"></i></a>

      </div>
    </div>

  @endforeach

  {{ $posts->links() }}
@endsection
