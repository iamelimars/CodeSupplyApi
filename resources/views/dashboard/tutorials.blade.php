@extends('layouts.dash')


@section('menu')
  <div class="menu-item">
    <a class="active" href="">Tutorials</a>
  </div>
  <div class="menu-item">
    <a class="" href="">New Tutorial</a>
  </div>




@endsection


@section('content')

  @foreach ($posts as $post)
    <div class="media">
      <div class="media-left media-middle">
        <a href="#">
          <img class="media-object" src="{{ $post->image_url }}" alt="...">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">{{ $post->title }}</h4>
        <p id="dash-body">{{ str_limit($post->body, 300) }}</p>
      </div>
    </div>
  @endforeach

  {{ $posts->links() }}
@endsection
