@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Lauren is looking to build her client base. She\'s close to qualifying and wants to gain more experience',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'Book in with Lauren',
	'ogdescription' => 'Looking for a new stylist? Lauren is close to completing her apprentiship and is looking to build her client base. Book in with her - you won\'t be dissapointed!',
	'ogimage' => url('/') . '/images/offer/lauren_offer.jpg',
	'title' => 'Paul Kemp Hairdressing - Offer with Lauren - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="ind-offer">

	<div class="ind-offer-copy">
		<h1>Special introductory offer with our latest Addition to the team</h1>
		<p>Our latest <strong>Senior Stylist</strong> has over 12 years experience and is a seriously skilled hairdresser!</p>
		<p>If you're considering a new stylist then take advantage of this great intro offer with her&hellip;</p>
	</div>

	<div id="ind-offer-img-sarah"></div>

	<div class="ind-offer-copy">
		<p><strong>Come in for a FREE consultation and if you like the ideas Sarah comes up with then book in to get 20% off your visit!</strong></p>
		<p><strong>Call 01925 444488 to book</strong><br>or use our online booking (link at top of page)</p>
		<p>Just mention the offer at the time of your visit<br>(Skin Test reqyured 48 hrs before any colour service for new clients)</p>
		<p class="link"><a href="{{ URL::to('team/lauren') }}" target="_blank">Click here to find out more about her &gt;</a></p>
	</div>

	<div id="fb-like">
		<div class="fb-like" data-href="{{ URL::to('offer/lauren') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
	</div>

</section> <!--end #offers-->

@stop
