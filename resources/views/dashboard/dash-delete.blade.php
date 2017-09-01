Delete Post {{$id}}
<img src="{{ $singlePost->image_url }}" alt="">
<h1>{{ $singlePost->title }}</h1>
<h4>{{ $user->name }}</h4>

{!! $singlePost->body !!}
