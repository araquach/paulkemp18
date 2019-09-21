@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Lauren is looking to build her client base - take advantage of this gret offer',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'Special offer with Lauren',
	'ogdescription' => 'Looking for a new stylist? Lauren is close to completing her apprentiship and is looking to build her client base. Book in with her - you won\'t be dissapointed!',
	'ogimage' => url('/') . '/images/offer/individual/lauren_montage_fb.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Paul Kemp Hairdressing - Offer with Lauren - Hairdressers in Warrington'
	])

@stop

@section('content')

@include('layouts.partials.fb_like')

<div id="ind-offer">
	<div class="columns">
		<div class="column is-8">
			<div class="top section">
				<h2 class="title is-2 is-size-4-mobile has-text-primary">
				Special Offer with Lauren</h2>
				<h3 class="subtitle is-3">A Colour &amp; Cut for just &pound;40!</h3>
				<p class="is-size-5">Lauren's skills are developing rapidly and she's soon going to be promoted to the next level!</p>
				<p class="is-size-4"><strong>She's now looking to get as much experience as possible. Take advantage of this great Colour and Cut price!</strong></p>
			</div>
		</div>

	</div>

	<figure class="image">
		{{ Html::image('/images/offer/individual/lauren_montage.png') }}
	</figure>

	<div class="columns">
		<div class="column is-8">
			<div class="section">
				<p class="is-size-5"><strong>Come in for a FREE consultation and if you like the ideas Lauren comes up with then get booked in with her!</strong></p>
				<p class="is-size-4"><strong>Call 01925 444488 to book</strong><br>
				or use our online booking (link at top of page)</p>
				<p class="small">(Offer ends 31/10/19 - Skin Test required 48 hrs before any colour service for new clients)</p>
				<a href="{{ URL::to('team/lauren') }}" target="_blank" class="button is-primary">Find out more about Lauren</a>
				<br><br>

				<div id="fb-like">
				<div class="fb-like" data-href="{{ URL::to('offer/lauren') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
