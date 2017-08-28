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
                                    <img src="http://via.placeholder.com/350x200" alt="...">
                                    <div class="caption">
                                        <a href="{{route('post.show', $post->id)}}"><h4 class="col-xs-12 text-center">{{ $post->title }}</h4></a>
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
    </div>



@endsection