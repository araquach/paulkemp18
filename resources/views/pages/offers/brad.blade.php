@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Check out this amazing offer for our recent addition to the team Brad',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'A special introductory offer with Sarah - our latest Senior Stylist',
	'ogdescription' => 'Looking for a new stylist? Give Brad, our recent addition to the team a try. Here\'s a special intro offer with him',
	'ogimage' => url('/') . '/images/offer/brad_offer.jpg',
	'title' => 'Paul Kemp Hairdressing - Offer with Brad - Hairdressers in Warrington'
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
