@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Abi joined the team as an apprentice and is on a fast track route to becoming the next PK stylist. She\'s currently taking on clients who require more basic levels of cutting & colouring',
	'keywords' => 'Abi Clarke, Paul Kemp Hairdressing stylists, hairdressers, PK, graduate stylist, junior stylist',
	'ogtitle' => 'Abi Clarke',
	'ogdescription' => 'Abi joined the team as an apprentice and is on a fast track route to becoming the next PK stylist. She\'s currently taking on clients who require more basic levels of cutting & colouring',
	'ogimage' => url('/') . '/images/staff/meta/abi.jpg',
	'title' => 'Paul Kemp Hairdressing - Abi'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<section id="team_ind">
<div id="team_abi" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Abi Clarke</h2>
	<p>Abi joined the team as an apprentice and is on a fast track route to becoming the next PK stylist.</p>
	<p>She's currently taking on clients who require more basic levels of cutting &amp; colouring.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Abi : &pound;35*</p>
	
	<div id="feedback_feed_ind">
  	<ul>
  		@foreach($reviews as $review)
      	    <li>&quot;{{ $review->review }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
      	@endforeach
  	</ul>
	</div> <!--#feedback_feed-->
	
	<a href="{{ URL::to('reviews/abi') }}">More of Abi's reviews here &gt;</a>
	
	<br>
	
	<a href="{{ URL::to('team') }}#abi">Click here to see the full team &gt;</a>
	
	<div id="fb-like">
		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/abi" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
	
	</section> <!--team_ind_copy-->

<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop