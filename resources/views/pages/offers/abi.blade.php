@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Check out this amazing offer with Abi',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'A special offer with Abi',
	'ogdescription' => 'Looking for a new stylist? Give Abi a go - you won\'t be dissapointed. She\'s a member of the GHD Style Squad. Here\'s a special offer with her',
	'ogimage' => url('/') . '/images/offer/individual/abi_montage_fb.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Paul Kemp Hairdressing - Offer with Abi - Hairdressers in Warrington'
	])

@stop

@section('content')

@include('layouts.partials.fb_like')

<div id="ind-offer">
	<div class="columns">
		<div class="column is-8">
			<div class="top section">
				<h2 class="title is-2 is-size-4-mobile has-text-primary">Special offer with Abi</h2>
				<p class="is-size-5">Abi is an amazing stylist and a member of the GHD Style Squad!</p>

				<p class="is-size-4"><strong>If you're considering a new stylist then take advantage of this great offer with her&hellip;</strong></p>
			</div>
		</div>

	</div>

	<figure class="image">
		{{ Html::image('/images/offer/individual/abi_montage.png') }}
	</figure>

	<div class="columns">
		<div class="column is-8">
			<div class="section">
				<p>Abi is an exceptionally talented stylist - she is a member of the GHD Style Squad</p>
				<p class="is-size-5"><strong>Come in for a FREE consultation and if you like the ideas Abi comes up with then book in to get 25% off your visit!</strong></p>
				<p class="is-size-4"><strong>Call 01925 444488 to book</strong><br>
				or use our online booking (link at top of page)</p>
				<p>Just mention the offer at the time of your visit</p>
				<p class="small">(Offer ends 30/08/20 - Skin Test required 48 hrs before any colour service for new clients)</p>
				<a href="{{ URL::to('blog/abi-salon-international') }}" target="_blank">Find out more about her work in the Style Squad here ></a>
				<br><br>

				<div id="fb-like">
				<div class="fb-like" data-href="{{ URL::to('offer/abi') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
