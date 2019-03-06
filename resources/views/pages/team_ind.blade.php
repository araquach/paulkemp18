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

<div id="team_ind">
	<div class="columns">
		<div class="column section">
			<figure class="image">
				{{ Html::image('images/staff/' . $team_member->class . '.jpg', $team_member->name) }}
			</figure>
			<div id="feedback_feed_ind" class="box is-shadowless">
			  	<ul>
			  		@foreach($reviews as $review)
			      	    <li class="is-size-5">&quot;{{ $review->review }}&quot;<br><span class="is-size-7">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
			      	@endforeach
			  	</ul>
			</div>
		</div>
		<div class="column section">
			<h2 class="title is-3 has-text-primary">{{ $team_member->name }}</h2>
			<p>{{ $team_member->para1 }}</p>
			<p>{{ $team_member->para2 }}</p>
			<p>{{ $team_member->para3 }}</p>
			<p class="has-text-weight-bold is-size-5 is-bold">Average Cut &amp; Colour price with {{ $team_member->review_link }} : &pound;{{ $team_member->price }}*</p>
			<div class="team-ind-bottom">
				@if($reviews->count() > 0)
					<a href="{{ URL::to('reviews/' . $team_member->class ) }}" class="button is-primary">More of {{ $team_member->review_link }}'s reviews here</a>
				@endif
				<br><br>
				<div id="fb-like">
					<div class="fb-like" data-href="http://www.paulkemphairdressing.com/{{ $team_member->class }}" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
				</div>
				<section>
	    			<p class="has-text-centered is-size-7">*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
				</section>
			</div>
		</div>
			
	</div>
</div>

@stop