@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Check out this amazing offer with Brad',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'A special offer with our talented stylist Brad',
	'ogdescription' => 'Looking for a new stylist? Here\'s a special offer with our talented stylist Brad',
	'ogimage' => url('/') . '/images/offer/individual/brad_montage_fb.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Paul Kemp Hairdressing - Offer with Brad - Hairdressers in Warrington'
	])

@stop

@section('content')

@include('layouts.partials.fb_like')

<div id="ind-offer">
	<div class="columns">
		<div class="column is-8">
			<div class="top section">
				<h2 class="title is-2 is-size-4-mobile has-text-primary">Special offer with Brad</h2>
				<p class="is-size-5">Brad has loads of experience and is a seriously skilled hairdresser! Check out his work in the pics!</p>
				<p class="is-size-4"><strong>If you're considering a new stylist then take advantage of this great offer with him&hellip;</strong></p>
			</div>
		</div>
	</div>

	<figure class="image">
		{{ Html::image('/images/offer/individual/brad_montage.png') }}
	</figure>

	<div class="columns">
		<div class="column is-8">
			<div class="section">
				<p class="is-size-5"><strong>Come in for a FREE consultation and if you like the ideas Brad comes up with then book in to get 25% off your visit!</strong></p>
				<p class="is-size-4"><strong>Call 01925 444488 to book</strong><br>
				or use our online booking (link at top of page)</p>
				<p>Just mention the offer at the time of your visit</p>
				<p class="small">(Offer ends 31/03/20 - Skin Test required 48 hrs before any colour service for new clients)</p>
				<a href="{{ URL::to('team/brad') }}" target="_blank" class="button is-primary">Find out more about Brad</a>
				<br><br>

				<div id="fb-like">
				<div class="fb-like" data-href="{{ URL::to('offer/brad') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
