@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - ' . $team_member->name,
	'keywords' => $team_member->name . ', Paul Kemp Hairdressing ' . $team_member->level . ', hairdressers, PK',
	'ogtitle' => $team_member->name,
	'ogdescription' => $team_member->para1 . ' ' . $team_member->para2,
	'ogimage' => url('/') . '/images/staff/meta/' . $team_member->class . '.jpg',
	'title' => 'Paul Kemp Hairdressing - ' . $team_member->review_link,
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<section id="team_ind">
<div id="team-{{ $team_member->class }}" class="team_pic"></div>

	<section id="team_ind_copy">
		<h2>{{ $team_member->name }}</h2>
		<p>{{ $team_member->para1 }}</p>
		<p>{{ $team_member->para2 }}</p>
		<p>{{ $team_member->para3 }}</p>
		<p class="team_ind_price">Average Cut &amp; Colour price with {{ $team_member->review_link }} : &pound;{{ $team_member->price }}*</p>
		
		<div id="feedback_feed_ind">
	  	<ul>
	  		@foreach($reviews as $review)
	      	    <li>&quot;{{ $review->review }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
	      	@endforeach
	  	</ul>
		</div> <!--#feedback_feed-->
		
		<a href="{{ URL::to('reviews/' . $team_member->class ) }}">More of {{ $team_member->review_link }}'s reviews here &gt;</a>
		
		<br>
		
		<a href="{{ URL::to('team') }}#{{ $team_member->class}}">Click here to see the full team &gt;</a>
		
		<div id="fb-like">
			<div class="fb-like" data-href="http://www.paulkemphairdressing.com/{{ $team_member->class }}" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
	
	</section> <!--team_ind_copy-->

<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop