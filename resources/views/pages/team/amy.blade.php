@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => '',
	'keywords' => 'Amy Woods, Paul Kemp Hairdressing stylists, hairdressers, PK',
	'ogtitle' => 'Amy Woods',
	'ogdescription' => 'Amy recently joined the team after moving over from sister salon Jakata.
	He\'s a multi-talented stylist with a great flare for fashion colouring, cutting and styling.
	He\'s a popular stylist so book ahead.',
	'ogimage' => url('/') . '/images/staff/meta/amy.jpg',
	'title' => 'Paul Kemp Hairdressing - Amy'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<section id="team_ind">
<div id="team_amy" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Amy Woods</h2>
	<p>Amy is an extremely talented stylist with over 7 years experience including working in Australia.</p>
	<p>She particularly loves colouring hair, especially using balayage techniques. She also loves creating soft waves and more natural, lived in looks.</p>
	<p>She's already proving to be a popular stylist so ensure you book ahead!</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Amy : &pound;107*</p>
	
	<div id="feedback_feed_ind">
  	<ul>
  		@foreach($reviews as $review)
      	    <li>&quot;{{ $review->review }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
      	@endforeach
  	</ul>
  	
	</div> <!--#feedback_feed-->
	
	<a href="{{ URL::to('reviews/amy') }}">More of Amy's reviews here &gt;</a>
	
	<br>
	
	<a href="{{ URL::to('team') }}#amy">Click here to see the full team &gt;</a>
	
	<div id="fb-like">
		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/amy" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
	
	</section> <!--team_ind_copy-->


<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop