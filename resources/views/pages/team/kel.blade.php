@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Salon manager Kelly has 14 years experience working in Warrington town centre. 
	She is the team leader of the salon. 
	She specialises in long hair styling and is also one of the extension experts within the salon.',
	'keywords' => 'Kellie Reedy, Kelly Reedy, Paul Kemp Hairdressing stylists, hairdressers, PK',
	'ogtitle' => 'Kellie Reedy',
	'ogdescription' => 'Salon manager Kelly has 14 years experience working in Warrington town centre. 
	She is the team leader of the salon. 
	She specialises in long hair styling and is also one of the extension experts within the salon.',
	'ogimage' => url('/') . '/images/staff/meta/kel.jpg',
	'title' => 'Paul Kemp Hairdressing - Kellie'
	])
	
@stop

@section('content') 

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<section id="team_ind">
	<div id="team_kel" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Kellie Reedy</h2>
	<p>Salon manager Kelly has 14 years experience working in Warrington town centre.</p>
	<p>She is the team leader of the salon.</p> 
	<p>She specialises in long hair styling and is also one of the extension experts within the salon.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Kelly : &pound;114*</p>
	
	<div id="feedback_feed_ind">
  	<ul>
  		@foreach($reviews as $review)
      	    <li>&quot;{{ $review->review }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
      	@endforeach
  	</ul>
	</div> <!--#feedback_feed-->
	
	<a href="{{ URL::to('reviews/kellie') }}">More of Kellie's reviews here &gt;</a>
	
	<br>
	
	<a href="{{ URL::to('team') }}#kel">Click here to see the full team &gt;</a>
	
	<div id="fb-like">
		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/kel" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
		
</section> <!--team_ind_copy-->
<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop