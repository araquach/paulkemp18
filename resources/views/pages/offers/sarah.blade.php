@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Check out this amazing offer for our latest Senior Stylist Sarah',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'A special introductory offer with Sarah - our latest Senior Stylist',
	'ogdescription' => 'Looking for a new stylist? Give our latest addition to the team a try. Here\'s a special intro offer for her',
	'ogimage' => url('/') . '/images/offer/sarah_offer.jpg',
	'title' => 'Paul Kemp Hairdressing - Offer with Sarah - Hairdressers in Warrington'
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
		<p class="link"><a href="https://paulkemphairdressing.com/blog/introducing_sarah" target="_blank">Click here to find out more about her &gt;</a></p>
	</div>

</section> <!--end #offers-->

@stop
