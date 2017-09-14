
@extends('layouts.home-layout')

@section('content')
{{--<div id="hero" style="background-image: url('https://s3.us-east-2.amazonaws.com/iamelimars/city.png')">--}}
    {{--<div id="circle"></div>--}}
{{--</div>--}}
    <div class="container">
        {{-- <div id="ad-container" class="col-md-12">

        </div> --}}

        <div id="recent-section" class="home-section">
            <h3>Most Recent Tutorials</h3>
            <div id="items">
                <div class="row">
                    @foreach ($latestPosts as $latestPost)
                        <div class="col-sm-6 col-md-3">
                            <a href="{{route('post.show', $latestPost->id)}}">
                            <div class="thumbnail">
                                <img src="{{ $latestPost->image_url }}" alt="...">
                                <div class="caption">
                                    <a href="{{route('post.show', $latestPost->id)}}">{{ $latestPost->title }}</a>
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
                        <div class="col-md-6 col-md-3">
                            <a href="{{route('post.show', $frontendPost->id)}}">
                            <div class="thumbnail">
                                <img src="{{ $frontendPost->image_url }}" alt="...">
                                <div class="caption">
                                    <a href="{{route('post.show', $frontendPost->id)}}">{{ $frontendPost->title }}</a>
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
                                <img src="{{ $backendPost->image_url }}" alt="...">
                                <div class="caption">
                                    <a href="{{route('post.show', $backendPost->id)}}">{{ $backendPost->title }}</a>
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
                                <img src="{{$fullstackPost->image_url}}" alt="...">
                                <div class="caption">
                                    <a href="{{route('post.show', $fullstackPost->id)}}">{{ $fullstackPost->title }}</a>

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
        <script>
  			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  			  ga('create', 'UA-105618306-1', 'auto');
  			  ga('send', 'pageview');

  			</script>
    </div>
    {{--<div id="about" class=" row col-xs-12">--}}

    {{--</div>--}}

@endsection
    {{--</body>--}}
{{--</html>--}}
