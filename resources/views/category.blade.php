@extends('layouts.app')

@section('content')
    <div class="full">
    <div class="container">
        <div id="ad-container" class="col-md-12">
        </div>
        @foreach($categoryTitle as $category)
            <h1 class="col-xs-12 text-center">{{$category->title}}</h1>
        @endforeach
            <div id="items">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-sm-6 col-md-3">
                            <a href="{{route('post.show', $post->id)}}">
                                <div class="thumbnail">
                                    <img src="{{ $post->image_url }}" alt="...">
                                    <div class="caption">
                                        <a class="" href="{{route('post.show', $post->id)}}">{{ $post->title }}</a>
                                        {{--<p>{{ $post->body }} </p>--}}
                                        {{--<p><a href="#" class="btn btn-default" role="button">Button</a></p>--}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                {{--<a id="view-more-btn" class="col-xs-4 col-xs-offset-4 btn btn-lg text-center" href="">View More</a>--}}

                {{--{{ $posts->lastPage() }}--}}
                {{ $posts->links() }}
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
