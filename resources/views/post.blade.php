@extends('layouts.app')

@section('content')
{{--<div class="full">--}}

	<div class="clearfix"></div>
<div class="col-xs-12">
	<div class="container" id="content-container">
		<img class="" src="{{ $post->image_url }}" alt="">
		<div class="container">
			<h1>{{ $post->title }}</h1>
			<h5>{{ $user->name }} / {{ $post->created_at->format('M d Y') }}</h5>
			{!! $post->body !!}
		</div>
		<div class="container">
			<h3>Comments:</h3>
			<div id="disqus_thread"></div>
			<script>

                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://codesupply.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

		</div>


	</div>
</div>


{{--</div>--}}





@endsection