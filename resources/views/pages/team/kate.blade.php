@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Kate has the ability to put you instantly at ease and with her many years of experience she\'ll find a look that\'s perfect for you. 
	Colouring, cutting and long hair styling are her specialities.',
	'keywords' => 'Kate O\'Halloran, Paul Kemp Hairdressing stylists, hairdressers, PK',
	'ogtitle' => 'Kate O\'Halloran',
	'ogdescription' => 'Kate has the ability to put you instantly at ease and with her many years of experience she\'ll find a look that\'s perfect for you. 
	Colouring, cutting and long hair styling are her specialities.',
	'ogimage' => url('/') . '/images/staff/meta/kate.jpg',
	'title' => 'Paul Kemp Hairdressing - Kate'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<section id="team_ind">
	<div id="team_kate" class="team_pic"></div>
	
	<section id="team_ind_copy">
	<h2>Kate O'Halloran</h2>
	<p>Kate has the ability to put you instantly at ease and with her many years of experience she'll find a look that's perfect for you.</p>
	<p>Colouring, cutting and long hair styling are her specialities.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Kate : &pound;107*</p>
	
	<div id="feedback_feed_ind">
  	<ul>
  		@foreach($reviews as $review)
      	    <li>&quot;{{ $review->review }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
      	@endforeach
  	</ul>
	</div> <!--#feedback_feed-->
	
	<a href="{{ URL::to('reviews/kate') }}">More of Kate's reviews here &gt;</a>
	
	<br>
	
	<a href="{{ URL::to('team') }}#kate">Click here to see the full team &gt;</a>
	
	<div id="fb-like">
		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/kate" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
	
	</section> <!--team_ind_copy-->
	<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
	</section>
</section> <!--team_ind-->

@stop