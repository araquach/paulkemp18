@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Louise is one of our more recent addition to the team but is already building up a very strong client base. She\'s a diverse stylist with strong cutting &amp colouring skills. Her background in men\'s hairdressing and barbering means she\'s a grteat choice for gent\'s too',
	'keywords' => 'Louise Bailey, stylist, hairdressing, hairstyling',
	'ogtitle' => 'Louise Bailey',
	'ogdescription' => 'Louise recently joined the team from working in a busy Grappenhall salon. She\'s an extremely skillfull men\'s hairdresser and also talented at womens cutting and styling. She\'s eager to grow her client base quickly - she\'s got some fantastic offers on for a limited time!',
	'ogimage' => url('/') . '/images/staff/meta/louise.jpg',
	'title' => 'Paul Kemp Hairdressing - Louise'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<section id="team_ind">
	<div id="team_louise" class="team_pic"></div>
	
	<section id="team_ind_copy">
	<h2>Louise Bailey</h2>
	<p>Louise is one of our more recent addition to the team but is already building up a very strong client base.</p> 
	<p>She's a diverse stylist with strong cutting &amp colouring skills.</p>
	<p>Her background in men's hairdressing and barbering means she's a great choice for gent's too</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Louise : &pound;107*</p>
	
	<div id="feedback_feed_ind">
  	<ul>
	  	@foreach($reviews as $review)
      	    <li>&quot;{{ $review->review }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
      	@endforeach
  	</ul>
	</div> <!--#feedback_feed-->
	
	<a href="{{ URL::to('reviews/louise') }}">More of Louise's reviews here &gt;</a>
	
	<br>
	
	<a href="{{ URL::to('team') }}#jo">Click here to see the full team &gt;</a>
	
	<div id="fb-like">
		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/louise" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
	
</section> <!--team_ind_copy-->
<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop