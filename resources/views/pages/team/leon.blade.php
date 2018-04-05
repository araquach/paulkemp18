@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => '',
	'keywords' => 'Leon Pritchard, Paul Kemp Hairdressing stylists, hairdressers, PK',
	'ogtitle' => 'Leon Pritchard',
	'ogdescription' => 'Leon has quickly built up a strong reputation for his skills in cutting, colouring & styling hair. 
	He\'s a big hit in the salon due to his friendly personality.
	He has grown to be a pivotal member of the team and is fast expanding his ever growing client base.',
	'ogimage' => url('/') . '/images/staff/meta/leon.jpg',
	'title' => 'Paul Kemp Hairdressing - Leon'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<section id="team_ind">
<div id="team_leon" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Leon Pritchard</h2>
	<p>Leon has quickly built up a strong reputation for his skills in cutting, colouring &amp; styling hair.</p>
	<p>He's a big hit in the salon due to his friendly personality.</p>
	<p>He has grown to be a pivotal member of the team and is fast expanding his ever growing client base.</p>
	<p class="team_ind_price">Average Cut &amp; Colour price with Leon : &pound;125*</p>
	
	<div id="feedback_feed_ind">
  	<ul>
  		@foreach($reviews as $review)
      	    <li>&quot;{{ $review->review }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
      	@endforeach
  	</ul>
	</div> <!--#feedback_feed-->
	
	<a href="{{ URL::to('reviews/leon') }}">More of Leon's reviews here &gt;</a>
	
	<br>
	
	<a href="{{ URL::to('team') }}#leon">Click here to see the full team &gt;</a>
	
	<div id="fb-like">
		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/leon" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
	
	</section> <!--team_ind_copy-->


<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop