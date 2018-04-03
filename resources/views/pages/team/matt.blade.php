@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Matt recently joined the team after moving over from sister salon Jakata.
	He\'s a multi-talented stylist with a great flare for fashion colouring, cutting and styling.
	He\'s a popular stylist so book ahead.',
	'keywords' => 'Matt Lane, Paul Kemp Hairdressing stylists, hairdressers, PK',
	'ogtitle' => 'Matt Lane',
	'ogdescription' => 'Matt recently joined the team after moving over from sister salon Jakata.
	He\'s a multi-talented stylist with a great flare for fashion colouring, cutting and styling.
	He\'s a popular stylist so book ahead.',
	'ogimage' => url('/') . '/images/staff/meta/matt.jpg',
	'title' => 'Paul Kemp Hairdressing - Matt'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<section id="team_ind">
<div id="team_matt" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Matt Lane</h2>
	<p>Matt recently joined the team after moving over from sister salon Jakata. </p>
	<p>He's a multi-talented stylist with a great flare for fashion colouring, cutting and styling.</p>
	<p>He's a popular stylist so book ahead.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Matt : &pound;90*</p>
	
	<div id="feedback_feed_ind">
  	<ul>
  		@foreach($reviews as $review)
      	    <li>&quot;{{ $review->review }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
      	@endforeach
  	</ul>
  	
	</div> <!--#feedback_feed-->
	
	<a href="{{ URL::to('reviews/matt') }}">More of Matt's reviews here &gt;</a>
	
	<br>
	
	<a href="{{ URL::to('team') }}#matt">Click here to see the full team &gt;</a>
	
	<div id="fb-like">
		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/matt" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
	
	</section> <!--team_ind_copy-->


<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop