@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Check out this amazing offer for our talented Senior Stylist Sarah',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'A special introductory offer with Sarah',
	'ogdescription' => 'Looking for a new stylist? Give our latest addition to the team a try. Here\'s a special intro offer for her',
	'ogimage' => url('/') . '/images/offer/individual/sarah_montage_fb.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Paul Kemp Hairdressing - Offer with Sarah - Hairdressers in Warrington'
	])

@stop

@section('content')

@include('layouts.partials.fb_like')

<div id="ind-offer">
	<div class="columns">
		<div class="column is-8">
			<div class="top section">
				<h2 class="title is-2 is-size-4-mobile has-text-primary">Special introductory offer with Sarah</h2>
				<p class="is-size-5">Our latest <strong>Senior Stylist</strong> has over 12 years experience and is a seriously skilled hairdresser!</p>
				<p class="is-size-4"><strong>If you're considering a new stylist then take advantage of this great intro offer with her&hellip;</strong></p>
			</div>
		</div>

	</div>

	<figure class="image">
		{{ Html::image('/images/offer/individual/sarah_montage.png') }}
	</figure>

	<div class="columns">
		<div class="column is-8">
			<div class="section">
				<p class="is-size-5"><strong>Come in for a FREE consultation and if you like the ideas Sarah comes up with then book in to get 20% off your visit!</strong></p>
				<p class="is-size-4"><strong>Call 01925 444488 to book</strong><br>
				or use our online booking (link at top of page)</p>
				<p>Just mention the offer at the time of your visit</p>
				<p class="small">(Offer ends 27/09/19 - Skin Test required 48 hrs before any colour service for new clients)</p>
				<a href="https://paulkemphairdressing.com/blog/introducing_sarah" target="_blank" class="button is-primary">Find out more about Sarah</a>
				<br><br>

				<div id="fb-like">
				<div class="fb-like" data-href="{{ URL::to('offer/sarah') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
