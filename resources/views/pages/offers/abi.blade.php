@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Check out this amazing offer for our newly promoted Stylist Abi',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'A special introductory offer with Abi',
	'ogdescription' => 'Looking for a new stylist? Give Abi a go - you won\'t be dissapointed. Here\'s a special intro offer with her',
	'ogimage' => url('/') . '/images/offer/abi_offer.jpg',
	'title' => 'Paul Kemp Hairdressing - Offer with Abi - Hairdressers in Warrington'
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
