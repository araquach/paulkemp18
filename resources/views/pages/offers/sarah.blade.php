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

	<div id="ind-offer-copy">
		
	</div>

	<div id="ind-offer-pic">
		
	</div>

</section> <!--end #offers-->

@stop
