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

	<div id="ind-offer-copy">
		
	</div>

	<div id="ind-offer-pic">
		
	</div>

</section> <!--end #offers-->

@stop
