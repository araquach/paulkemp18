@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Check out this amazing offer for our recent addition to the team Brad',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'A special introductory offer with our talented stylist Brad',
	'ogdescription' => 'Looking for a new stylist? Give Brad, our recent addition to the team a try. Here\'s a special intro offer with him',
	'ogimage' => url('/') . '/images/offer/individual/brad_montage_fb.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Paul Kemp Hairdressing - Offer with Brad - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')


<section id="ind-offer">

	<div class="ind-offer-copy">
		<h1>Special introductory offer with Bradley Ryan - a recent addition to the team</h1>
		<p>Brad recently joined us - he has a heap of experience and is a seriously skilled hairdresser! Check out his work in the pics!</p>
		<p><strong>If you're considering a new stylist then take advantage of this great intro offer with him&hellip;</strong></p>
	</div>

	<div id="ind-offer-img-brad"></div>

	<div class="ind-offer-copy">
		<p><strong>Come in for a FREE consultation and if you like the ideas Brad comes up with then book in to get 20% off your visit with him!</strong></p>
		<p><strong>Call 01925 444488 to book</strong><br>or use our online booking (link at top of page)</p>
		<p>Just mention the offer at the time of your visit</p>
		<p class="small">(Skin Test required 48 hrs before any colour service for new clients)</p>
		<p class="link"><a href="https://paulkemphairdressing.com/blog/introducing_brad" target="_blank">Click here to find out more about him &gt;</a></p>

<div id="ind-offer">
	<div class="columns">
		<div class="column is-8">
			<div class="top section">
				<h2 class="title is-2 is-size-4-mobile has-text-primary">Special introductory offer with Brad</h2>
				<p class="is-size-5">Brad recently joined us - he has a heap of experience and is a seriously skilled hairdresser! Check out his work in the pics!</p>
				<p class="is-size-4"><strong>If you're considering a new stylist then take advantage of this great intro offer with him&hellip;</strong></p>
			</div>
		</div>
	</div>
	
	<figure class="image">
		{{ Html::image('/images/offer/individual/brad_montage_wide.png') }}
	</figure>

	<div class="columns">
		<div class="column is-8">
			<div class="section">
				<p class="is-size-5"><strong>Come in for a FREE consultation and if you like the ideas Brad comes up with then book in to get 20% off your visit!</strong></p>
				<p class="is-size-4"><strong>Call 01925 444488 to book</strong><br>
				or use our online booking (link at top of page)</p>
				<p>Just mention the offer at the time of your visit</p>
				<p class="small">(Skin Test required 48 hrs before any colour service for new clients)</p>
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
