@extends('layouts.app')

@section('content')
{{--<div class="full">--}}

<div class="clearfix"></div>
<div class="col-xs-12">
	<div class="container" id="content-container">
		<img class="" src="{{ $post->image_url }}" alt="">
		<div class="container">
			<div class="title-container">
				<h5>{{ $user->name }} / {{ $post->created_at->format('M d Y') }}</h5>
				<h1>{{ $post->title }}</h1>
			</div>
			
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
</div>


{{--</div>--}}





@endsection
