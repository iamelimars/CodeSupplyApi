@extends('layouts.app')

@section('content')
    <div class="full">
        <div class="container">
            {{--  <div id="ad-container" class="col-md-12">
            </div>  --}}
            <h1 class="col-xs-12 text-center">Most Recent Tutorials</h1>
            <div id="items">
              @foreach ($recentPosts->chunk(2) as $mostRecent )
                <div class="row">
                    @foreach ($mostRecent as $post)
                        <div class="col-md-6">
                            <a href="{{route('post.show', $post->id)}}">
                                <div class="thumbnail">
                                    <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
                                    <div class="caption">
                                        <a href="{{route('post.show', $post->id)}}">{{ $post->title }}</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
              @endforeach


                {{--{{ $posts->lastPage() }}--}}
                {{ $recentPosts->links() }}
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



@endsection
