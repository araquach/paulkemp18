@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Check out this amazing offer for our recently promoted Stylist Abi',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'A special offer with Abi',
	'ogdescription' => 'Looking for a new stylist? Give Abi a go - you won\'t be dissapointed. Here\'s a special offer with her',
	'ogimage' => url('/') . '/images/offer/individual/abi_montage_meta.jpg',
	'ogimagewidth' => '1400px',
	'ogimageheight' => '1200px',
	'title' => 'Paul Kemp Hairdressing - Offer with Abi - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="ind-offer">

	<div class="ind-offer-copy">
		<h1>Special offer with our recently promoted stylist Abi</h1>
		<p>Abi is flying up the ranks and the quality of her work is second to none! Check out some of her recent looks in the pics!</p>
		<p><strong>If you're considering a new stylist then take advantage of this great intro offer with her&hellip;</strong></p>
	</div>

	<div id="ind-offer-img-abi"></div>

	<div class="ind-offer-copy">
		<p><strong>Come in for a FREE consultation and if you like the ideas Abi comes up with then book in to get 20% off your visit with her!</strong></p>
		<p><strong>Call 01925 444488 to book</strong><br>or use our online booking (link at top of page)</p>
		<p>Just mention the offer at the time of your visit</p>
		<p class="small">(Skin Test required 48 hrs before any colour service for new clients)</p>
		<p class="link"><a href="{{ URL::to('team/abi') }}" target="_blank">Click here to find out more about her &gt;</a></p>
	</div>

	<div id="fb-like">
		<div class="fb-like" data-href="{{ URL::to('offer/abi') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
	</div>

</section> <!--end #offers-->

@stop
