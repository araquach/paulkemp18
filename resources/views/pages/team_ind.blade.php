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
				<img src="" alt="{{ $team_member->class}}">
			</figure>
			<div id="feedback_feed_ind">
			  	<ul>
			  		@foreach($reviews as $review)
			      	    <li>&quot;{{ $review->review }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
			      	@endforeach
			  	</ul>
			  	@if($reviews->count() > 0)
					<a href="{{ URL::to('reviews/' . $team_member->class ) }}">More of {{ $team_member->review_link }}'s reviews here &gt;</a>
				@endif
			</div>
		</div>
		<div class="column section">
			<h2 class="title is-3 has-text-primary">{{ $team_member->name }}</h2>
			<p>{{ $team_member->para1 }}</p>
			<p>{{ $team_member->para2 }}</p>
			<p>{{ $team_member->para3 }}</p>
			<p class="has-text-weight-bold is-size-5 is-bold">Average Cut &amp; Colour price with {{ $team_member->review_link }} : &pound;{{ $team_member->price }}*</p>
			<div id="fb-like">
				<div class="fb-like" data-href="http://www.paulkemphairdressing.com/{{ $team_member->class }}" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
			</div>
		</div>
	</div>
</div>

@stop