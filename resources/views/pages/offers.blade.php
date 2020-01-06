@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'New Year Offers',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'New Year Offers',
	'ogdescription' => '1/2 Price Cut, Dry & Style with every colour for new clients throughout January',
	'ogimage' => url('/') . '/images/offer/new_year_fb.jpg',
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
				<h1 class="title is-2 has-text-white">New Year Offers</h1>
			</div>
		</div>
		<div class="box">
			<div class="columns">
				<div class="column">
					<img src="{{ asset('images/offer/new_year.jpg') }}" alt="Colour & Cut Offer">
				</div>
				<section class="column is-8">
				  	<h2 class="title is-2">1/2 Price Cut, Dry & Style</h2>
						<p class="is-size-3">with every colour</p>
				  	<p class="is-size-5">for <strong>new clients</strong> throughout January</p>
				  	<small class="is-size-7">For New Clients - not with any other offer. Skin test required 48 hours before any colour service</small>
				</section>
			</div>
		</div>
		<div class="box">
			<div class="columns">
				<div class="column">
					<img src="{{ asset('images/offer/david.png') }}" alt="David Randles">
				</div>
				<section class="column is-8">
				  	<h2 class="title is-3">Special Offer with our new stylist</h2>
				  	<p>Our latest stylist David is looking to take on new clients.</p>
				  	<p class="is-size-4"><strong>A Colour & Cut for just £50</strong></p>
				  	<p>Book in with David and let him transform you!</p>
					<small class="is-size-7">For New Clients - not with any other offer - additional costs apply for dark to light and crazy colours<br>Skin test required 48hrs before any colour service</small>
				</section>
			</div>
		</div>

		{!! link_to('booking', "Book now", array('class'=>'button')) !!}

		<br><br>

		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/offers" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	</section>
</div> <!--end #offers-->

@stop
