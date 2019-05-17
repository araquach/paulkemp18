@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => '',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => '',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/offer/individual/offers_all.jpg',
	'title' => 'Paul Kemp Hairdressing - Offers - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<div>
	<section id="offers" class="section">
		<div class="columns">
			<div class="column is-9">
				<h1 class="title is-2">Special offers</h1>
				<h2 class="title is-4">with selected team members</h2>

				<p class="is-size-4">Take advantage of these special offers!</p>
				<p>Some of our more recent additions to the team are eager to build their client base and are offering 20% off for new clients!</p>

				<p><em>Sarah, Brad &amp; Abi are all eager to take on more clients - book in for a free consultation with them to see what they can do for you.</em></p>

				<p><strong>We're running these offers with them for a limited time! Click on each offer to find out more!</strong></p>
			</div>
		</div>

		<a href="{{ URL::to('offer/sarah')}}">
			<div class="box">
				<div class="columns">
					<div class="column">
						<img src="{{ asset('images/offer/individual/sarah.jpg') }}" alt="Sarah">
					</div>
					<section class="column is-8">
					  	<h2 class="title is-3">Sarah's Offer</h2>
					  	<p>Senior Stylist Sarah joined the team at the start of the year and is already building a strong reputation!</p>
					  	<p class="is-size-4"><strong>For a limited time get 20% Off <br>your first visit with Sarah</strong></p>
					  	<p>A typical Colour and Cut around &pound100 (inc discount)<br></p>
						<small class="is-size-7">For New Clients - not with any other offer - Price is guide only and includes discount<br>Skin test required 48hrs before any colour service</small>
					</section>
				</div>
			</div>
		</a>
		<a href="{{ URL::to('offer/brad')}}">
			<div class="box">
				<div class="columns">
					<div class="column">
						<img src="{{ asset('images/offer/individual/brad.jpg') }}" alt="Brad">
					</div>
					<section class="column is-8">
					  	<h2 class="title is-3">Brad's Offer</h2>
					  	<p>Brad is quickly establishing himself as a highly sought after stylist</p>
					  	<p class="is-size-4"><strong>20% off all services <br>with Brad for a limited time!</strong></p>
					  	<p>A typical colour and Cut around &pound90 (inc discount)</p>
					    <small class="is-size-7">For New Clients - not with any other offer- Price is guide only and includes discount<br>Skin test required 48hrs before any colour service</small>
					</section>
				</div>
			</div>
		</a>
		<a href="{{ URL::to('offer/abi')}}">
			<div class="box">
				<div class="columns">
					<div class="column">
						<img src="{{ asset('images/offer/individual/abi.jpg') }}" alt="Abi">
					</div>
					<section class="column is-8">
					  <h2 class="title is-3">Abi's Offer</h2>
					  <p>Abi flew through her apprentiship and is now a fully fledged stylist. She's producig some incredible colours, cuts and styles.</p>
					  <p class="is-size-4"><strong>20% off all services with Abi</strong>	</p>
					  <p>A typical colour and Cut around &pound90 (inc discount)</p>
					  <small class="is-size-7">For New Clients - not with any other offer - Price is guide only and includes discount</small>
					</section>
				</div>
			</div>
		</a>
		
		{!! link_to('booking', "Book now", array('class'=>'button is-primary')) !!}

		<br><br>

		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/offers" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	</section>
</div> <!--end #offers-->
 
@stop
