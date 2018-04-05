@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Jo is a fantastic stylist with many years experience, she\'s a real long standing asset to the team. 
	Her down to earth nature instantly puts you at ease and her hairdressing skills really shine. 
	She loves doing men and women\'s hair. Book well in advance - she\'s a very busy stylist.',
	'keywords' => 'Jo Birchall, Joanne Mahoney, Paul Kemp Hairdressing stylists, hairdressers, PK',
	'ogtitle' => 'Jo Birchall',
	'ogdescription' => 'Jo is a fantastic stylist with many years experience, she\'s a real long standing asset to the team. 
	Her down to earth nature instantly puts you at ease and her hairdressing skills really shine. 
	She loves doing men and women\'s hair. Book well in advance - she\'s a very busy stylist.',
	'ogimage' => url('/') . '/images/staff/meta/jo.jpg',
	'title' => 'Paul Kemp Hairdressing - Jo'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<section id="team_ind">
	<div id="team_jo" class="team_pic"></div>
	
	<section id="team_ind_copy">
	<h2>Jo Birchall</h2>
	<p>Jo is a fantastic stylist with many years experience, she's a real long standing asset to the team.</p> 
	<p>Her down to earth nature instantly puts you at ease and her hairdressing skills really shine.</p>
	<p>She loves doing men and women's hair. Book well in advance - she's a very busy stylist. </p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Jo : &pound;125*</p>
	
	<div id="feedback_feed_ind">
  	<ul>
  		@foreach($reviews as $review)
      	    <li>&quot;{{ $review->review }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
      	@endforeach
  	</ul>
	</div> <!--#feedback_feed-->
	
	<a href="{{ URL::to('reviews/jo') }}">More of Jo's reviews here &gt;</a>
	
	<br>
	
	<a href="{{ URL::to('team') }}#jo">Click here to see the full team &gt;</a>
	
	<div id="fb-like">
		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/jo" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
	
</section> <!--team_ind_copy-->
<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop