@extends('layouts.app')

@section('content')
{{--<div class="full">--}}

	<div class="clearfix"></div>


<div class="container" id="content-container">
	{{-- {!! html_entity_decode(<h2>test</h2>) !!} --}}
	<img src="{{ $post->image_url }}" alt="">

	<h1>{{ $post->title }}</h1>
	<h5>{{ $user->name }} / {{ $post->created_at->format('M d Y') }}</h5>
	{{-- <pre> --}}
		{!! $post->body !!}
	{{-- </pre> --}}
	
	{{-- <script src="https://gist.github.com/iamelimars/2339250c3b835f10323c35d709b57bc4.js"></script> --}}
	{{-- <pre>
{{ e('
<h2>testtt</h2>
	<h2>testtt</h2>
	.test {
		background-color: red;
	}	

') }}

	&lt;h1&gt;test&lt;/h1&gt;
		
	</pre> --}}

	
</div>
{{--</div>--}}





@endsection