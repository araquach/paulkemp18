@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Paul Kemp Hairdressing - Home - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed.js') }}"></script>

<section id="home">
    
    <div class="proportional aspect1">
    		<div id="home_image"></div>
    </div>
    
    <div id="feedback_feed">
      	<ul>
      	@foreach($reviews as $review)
      	    <li>&quot;{{ limit_words($review->review) }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
      	@endforeach
      	</ul>
      	<p><a href="{{ URL::to('reviews') }}">More reviews here</a></p>
    </div> <!--#feedback_feed-->
        
    <section id="homecopy">
        <h2>A New Standard of Hairdressing</h2>
        <p>Paul Kemp Hairdressing is located right in the heart of Warrington town centre. Sister salon to the award winning <em><a href="http://www.jakatasalon.co.uk/" target="_blank">Jakata</a></em>, the stunning salon opened in June 2011 with the aim to offer an ultra relaxing atmosphere, first class customer service, alongside the highest level of hairdressing expertise.</p>
        <p>The talented hairdressing team are all trained to the highest level in cutting, colouring and styling hair, with specialists in technical colour, hair straightening, wedding hair and hair extensions. The team has a wealth of experience in all aspects of hairdressing so you can just sit back, relax and enjoy the experience.</p>
        <p><em>The salon has built up a strong reputation for creating stunning, fashionable looks tailored to suit you, and your lifestyle, so if you're looking for a new <strong class="paraend">hairdressers in Warrington</strong> then look no further!</em></p>
    </section>
    
    <div id="home_news">
		@foreach($blogs	as $blog)
			<a href="{{ URL::to('blog') }}/{{ $blog->slug }}">
				<aside class="home_news">
					<div class="home_news_pic" style="background: url('{{ $blog->paras()->first()->para_pic }}') no-repeat center center rgba(249, 249, 250, 0.8); background-size: cover;"></div>
					<div class="home_news_copy">
						<h3>{{ $blog->title }}</h3>
						<p>{{ limit_news_words($blog->paras()->first()->para) }}&hellip;</p>
					</div>
				</aside>
			</a>
		@endforeach
	</div>

</section> <!--#home-->

@stop