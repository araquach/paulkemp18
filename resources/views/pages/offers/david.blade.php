@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Check out this amazing introductory offer with David',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => '25% off your first visit to our ultra talented stylist David',
	'ogdescription' => 'Looking for a new stylist? Book in with David for a free consultation to see what he can do for you!',
	'ogimage' => url('/') . '/images/offer/individual/david_montage_2_fb.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Paul Kemp Hairdressing - Offer with David - Hairdressers in Warrington'
	])

@stop

@section('content')

@include('layouts.partials.fb_like')

<div id="ind-offer">
	<div class="columns">
		<div class="column is-8">
			<div class="top section">
				<h2 class="title is-2 is-size-4-mobile has-text-primary">Special introductory offer with David</h2>
				<p class="is-size-5">David joined the team earlier this year after completing his training at the Andrew Collinge Graduates Academy in Liverpool.</p>
				<p>He's fully settled into the PK team and is creating some stunning looks!</p>
				<p class="is-size-4"><strong>If you're considering a new stylist then take advantage of this great offer with him&hellip;</strong></p>
			</div>
		</div>
	</div>

	<figure class="image">
		{{ Html::image('/images/offer/individual/david_montage.png') }}
	</figure>

	<div class="columns">
		<div class="column is-8">
			<div class="section">
				<p class="is-size-5"><strong>Come in for a FREE consultation and if you like the ideas David comes up with then get 25% off yyour first visit to hime</p>
				<p class="is-size-4"><strong>Call 01925 444488 to book</strong><br>
				or use our online booking (link at top of page)</p>
				<p>Just mention the offer at the time of your visit</p>
				<p class="small">(Offer ends 30/08/20 - Skin Test required 48 hrs before any colour service for new clients)</p>
				<a href="{{ URL::to('team/david') }}" target="_blank" class="button is-primary">Find out more about David</a>
				<br><br>

				<div id="fb-like">
				<div class="fb-like" data-href="{{ URL::to('offer/david') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
