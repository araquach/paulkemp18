@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => '',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => '',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/offer/',
	'title' => 'Paul Kemp Hairdressing - Offers - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<div>
	<section class="section">
		<div>
			<h1 class="title is-2">Special offers</h1>
			<h2 class="title is-4">with selected team members</h2>

			<p>Take advantage of these special offers! Some of our recent additions to the team are eager to build their client base and are offering 20% off for new clients</p>

			<p><em></em></p>

			<p><strong>We're running these offers with each of them for a limited time! Click on each offer to find out more!</strong></p>
		</div>

		<a href="{{ URL::to('offer/lauren')}}">
			<div class="box">
				<section id="offer1">
				  	<h2>Sarah's Offer</h2>
				  	<p></p>
				  	<p><strong>For a limited time get 20% Off your first visit with Sarah</strong></p>
				  	<p>A typical Colour and Cut from &pound?? (inc discount)<br></p>
					<small>For New Clients - not with any other offer - Price is guide only and includes discount<br>Skin test required 48hrs before any colour service</small>
				</section>
			</div>
		</a>
		<a href="{{ URL::to('offer/abbi')}}">
			<div class="box">
				<section id="offer2">
				  	<h2>Brad's Offer</h2>
				  	<p></p>
				  	<p><strong>20% off all services with Brad for a limited time!</strong></p>
				  	<p>A typical colour and Cut from around &pound65 (inc discount)</p>
				    <small>For New Clients - not with any other offer- Price is guide only and includes discount<br>Skin test required 48hrs before any colour service</small>
				</section>
			</div>
		</a>
		<a href="{{ URL::to('offer/layla')}}">
			<div class="box">
				<section id="offer3">
				  <h2>Abi's Offer</h2>Layla is a master of amazing colours! Take advantage of this special price!</p>
				  <p><strong>20% off all services with Abi</strong>	</p>
				  <p>A typical colour and Cut from around &pound75 (inc discount)</p>
				  <small>For New Clients - not with any other offer - Price is guide only and includes discount</small>
				</section>
			</div>
		</a>
		
		{!! link_to('booking', "Book now", array('class'=>'button is-primary')) !!}

		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/offers" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	</section>
</div> <!--end #offers-->
 
@stop
