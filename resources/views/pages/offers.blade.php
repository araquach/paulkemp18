@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'New Year Offers',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'New Year Offers',
	'ogdescription' => '1/2 Price Cut, Dry & Style with every colour for new clients throughout January',
	'ogimage' => url('/') . '/images/offer/new_year2_fb.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Paul Kemp Hairdressing - Offers - Hairdressers in Warrington'
	])

@stop

@section('content')

@include('layouts.partials.fb_like')

<div>
	<section id="offers" class="section">
		<div class="columns">
			<div class="column is-9">
				<h1 class="title is-2 has-text-primary">Special Offers</h1>
			</div>
		</div>
		<a href="{{ URL::to('offers/david') }}">
		<div class="box">
			<div class="columns">
				<div class="column">
					<img src="{{ asset('images/offer/david.png') }}" alt="David Randles">
				</div>
				<section class="column is-8">
				  	<h2 class="title is-3">Special Offer with our newest member of the team</h2>
				  	<p>Our latest stylist David is looking to take on new clients.</p>
				  	<p class="is-size-4"><strong>A Colour & Cut for just £50</strong></p>
				  	<p>Book in with David and let him transform you!</p>
					<small class="is-size-7">For New Clients - not with any other offer - additional costs apply for dark to light and crazy colours<br>Skin test required 48hrs before any colour service</small>
				</section>
			</div>
		</div>
		</a>
		<a href="{{ URL::to('offers/abi') }}">
			<div class="box">
				<div class="columns">
					<div class="column">
						<img src="{{ asset('images/offer/individual/abi.png') }}" alt="Abi">
					</div>
					<section class="column is-8">
						<h2 class="title is-3">25% off your first visit to Abi</h2>
						<p>Abi is an awesome stylist and a member of the GHD Style Squad!</p>
						<p class="is-size-4"><strong>A Colour & Cut from just £70</strong></p>
						<p>Click for more info</p>
						<small class="is-size-7">For New Clients - not with any other offer <br>Skin test required 48hrs before any colour service</small>
					</section>
				</div>
			</div>
		</a>
		<a href="{{ URL::to('offers/brad') }}">
			<div  class="box">
				<div class="columns">
					<div class="column">
						<img src="{{ asset('images/offer/individual/brad.png') }}" alt="Brad">
					</div>
					<section class="column is-8">
						<h2 class="title is-3">25% off your first visit to Brad</h2>
						<p>Brad has loads of experience and is a seriously skilled hairdresser</p>
						<p class="is-size-4"><strong>A Colour & Cut from just £70</strong></p>
						<p>Click for more info</p>
						<small class="is-size-7">For New Clients - not with any other offer <br>Skin test required 48hrs before any colour service</small>
					</section>
				</div>
			</div>
		</a>
		<a href="{{ URL::to('offers/sarah') }}">
			<div class="box">
				<div class="columns">
					<div class="column">
						<img src="{{ asset('images/offer/individual/sarah.jpg') }}" alt="Sarah">
					</div>
					<section class="column is-8">
						<h2 class="title is-3">25% off your first visit with Sarah</h2>
						<p>Our seriously talented Senior Stylist Sarah has over 12 years experience and is a big name in the salon!</p>
						<p class="is-size-4"><strong>A Colour & Cut from just £90</strong></p>
						<p>Click for more info</p>
						<small class="is-size-7">For New Clients - not with any other offer <br>Skin test required 48hrs before any colour service</small>
					</section>
				</div>
			</div>
		</a>
		<!-- <a href="{{ URL::to('offers/jo') }}">
			<div class="box">
				<div class="columns">
					<div class="column">
						<img src="{{ asset('images/offer/individual/jo.png') }}" alt="Jo">
					</div>
					<section class="column is-8">
						<h2 class="title is-3">25% off your first visit with Jo</h2>
						<p>Jo is one of the longest standing members of th PK team and is a sought after hairdreser.</p>
						<p class="is-size-4"><strong>A Colour & Cut from just £80</strong></p>
						<p>Click for more info</p>
						<small class="is-size-7">For New Clients - not with any other offer <br>Skin test required 48hrs before any colour service</small>
					</section>
				</div>
			</div>
		</a> -->

		{!! link_to('booking', "Book now", array('class'=>'button')) !!}

		<br><br>

		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/offers" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	</section>
</div> <!--end #offers-->

@stop
