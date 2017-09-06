{{-- Delete Post {{$id}}
<img src="{{ $singlePost->image_url }}" alt="">
<h1>{{ $singlePost->title }}</h1>
<h4>{{ $user->name }}</h4>

{!! $singlePost->body !!} --}}


@extends('layouts.app')

@section('content')
{{--<div class="full">--}}

<div class="clearfix"></div>
<div class="col-xs-12">

	<div class="container text-center delete-container" id="content-container">

		<h1>{{ $message }} / {{ $id }}</h1>

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


{{--</div>--}}





@endsection
