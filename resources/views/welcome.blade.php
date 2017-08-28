
@extends('layouts.app')

@section('content')
{{--<div id="hero" style="background-image: url('https://s3.us-east-2.amazonaws.com/iamelimars/city.png')">--}}
    {{--<div id="circle"></div>--}}
{{--</div>--}}
    <div class="container">
        <div id="ad-container" class="col-md-12">

        </div>

        {{--<div id="categories">--}}
            {{--<div class=" col-sm-3 hidden-xs">--}}
                {{--<a href="" class="col-xs-12 active">ALL</a>--}}
            {{--</div>--}}
            {{--<div class=" col-sm-3 hidden-xs">--}}
                {{--<a href="" class="col-xs-12">FRONTEND</a>--}}
            {{--</div>--}}
            {{--<div class=" col-sm-3 hidden-xs">--}}
                {{--<a href="" class="col-xs-12">BACKEND</a>--}}
            {{--</div>--}}
            {{--<div class=" col-sm-3 hidden-xs">--}}
                {{--<a href="" class="col-xs-12">FULLSTACK</a>--}}
            {{--</div>--}}
            {{--<div class="btn-group visible-xs col-xs-12">--}}
              {{--<button type="button" class="btn btn-default dropdown-toggle col-xs-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                {{--CATEGORIES <span class="caret"></span>--}}
              {{--</button>--}}
              {{--<ul class="dropdown-menu col-xs-12">--}}
                {{--<li><a href="#">ALL</a></li>--}}
                {{--<li><a href="#">FRONTEND</a></li>--}}
                {{--<li><a href="#">BACKEND</a></li>--}}
                {{--<li><a href="#">FULLSTACK</a></li>--}}
              {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div id="recent-section" class="home-section">
            <h3>Most Recent Tutorials</h3>
            <div id="items">
                <div class="row">
                    @foreach ($latestPosts as $latestPost)
                        <div class="col-sm-6 col-md-3">
                            <a href="{{route('post.show', $latestPost->id)}}">
                            <div class="thumbnail">
                                <img src="http://via.placeholder.com/350x200" alt="...">
                                <div class="caption">
                                    <a href="{{route('post.show', $latestPost->id)}}"><h4 class="col-xs-12 text-center">{{ $latestPost->title }}</h4></a>
                                    {{--<p>{{ $post->body }} </p>--}}
                                    {{--<p><a href="#" class="btn btn-default" role="button">Button</a></p>--}}
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a id="view-more-btn" class="col-xs-4 col-xs-offset-4 btn btn-lg text-center" href="{{route('category.showRecent', $latestPost->id)}}">View More</a>

                {{--{{ $posts->lastPage() }}--}}
                {{--{{ $posts->links() }}--}}
            </div>
        </div>


        <div id="frontend-section" class="home-section">
            <h3>Frontend Tutorials</h3>
            <div id="items">
                <div class="row">

                    @foreach ($frontendPosts as $frontendPost)
                        <div class="col-sm-6 col-md-3">
                            <a href="{{route('post.show', $frontendPost->id)}}">
                            <div class="thumbnail">
                                <img src="http://via.placeholder.com/350x200" alt="...">
                                <div class="caption">
                                    <a href="{{route('post.show', $frontendPost->id)}}"><h4 class="col-xs-12 text-center">{{ $frontendPost->title }}</h4></a>
                                    {{--<p>{{ $post->body }} </p>--}}
                                    {{--<p><a href="#" class="btn btn-default" role="button">Button</a></p>--}}
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a id="view-more-btn" class="col-xs-4 col-xs-offset-4 btn btn-lg text-center" href="{{route('category.show', 1)}}">View More</a>

                {{--{{ $posts->lastPage() }}--}}
                {{--{{ $posts->links() }}--}}
            </div>
        </div>

        <div id="backend-section" class="home-section">
            <h3>Backend Tutorials</h3>
            <div id="items">
                <div class="row">
                    @foreach ($backendPosts as $backendPost)
                        <div class="col-sm-6 col-md-3">
                            <a href="{{route('post.show', $backendPost->id)}}">
                            <div class="thumbnail">
                                <img src="http://via.placeholder.com/350x200" alt="...">
                                <div class="caption">
                                    <a href="{{route('post.show', $backendPost->id)}}"><h4 class="col-xs-12 text-center">{{ $backendPost->title }}</h4></a>
                                    {{--<p>{{ $post->body }} </p>--}}
                                    {{--<p><a href="#" class="btn btn-default" role="button">Button</a></p>--}}
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a id="view-more-btn" class="col-xs-4 col-xs-offset-4 btn btn-lg text-center" href="{{route('category.show', 2)}}">View More</a>
                {{--{{ $posts->lastPage() }}--}}
                {{--{{ $posts->links() }}--}}
            </div>
        </div>

        <div id="fullstack-section" class="home-section">
            <h3>Fullstack Tutorials</h3>
            <div id="items">
                <div class="row">
                    @foreach ($fullstackPosts as $fullstackPost)
                        <div class="col-sm-6 col-md-3">
                            <a href="{{route('post.show', $fullstackPost->id)}}">
                            <div class="thumbnail">
                                <img src="http://via.placeholder.com/350x200" alt="...">
                                <div class="caption">
                                    <a href="{{route('post.show', $fullstackPost->id)}}"><h4 class="col-xs-12 text-center">{{ $fullstackPost->title }}</h4></a>
                                    {{--<p>{{ $post->body }} </p>--}}
                                    {{--<p><a href="#" class="btn btn-default" role="button">Button</a></p>--}}
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a id="view-more-btn" class="col-xs-4 col-xs-offset-4 btn btn-lg text-center" href="{{route('category.show', 3)}}">View More</a>
                {{--{{ $posts->lastPage() }}--}}
                {{--{{ $posts->links() }}--}}
            </div>
        </div>
        </div>
    </div>
    {{--<div id="about" class=" row col-xs-12">--}}

    {{--</div>--}}

@endsection
    {{--</body>--}}
{{--</html>--}}
