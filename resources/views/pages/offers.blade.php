@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Christmas Offers',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'Christmas Offers',
	'ogdescription' => 'Two great offers in the run up to Christmas! A Blow dry or Hair up for just £20 when you call on the day plus our new stylist David is offering a colour & cut for just £50!',
	'ogimage' => url('/') . '/images/offer/',
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
				<h1 class="title is-2 has-text-white">Christmas Offers</h1>
			</div>
		</div>
		<div class="box">
			<div class="columns">
				<div class="column">
					<img src="{{ asset('images/offer/styling.png') }}" alt="Hair Styling Offer">
				</div>
				<section class="column is-8">
				  	<h2 class="title is-3">Christmas Party Hair styling</h2>
				  	<p class="is-size-5">Call us up on the day you need your hair doing and one of our talented hairdressers will dry & style your hair or create a stunning hair-up for you</p>
				  	<p class="is-size-4"><strong>For only £20!</strong></p>
				  	<p>Appointment must be made on same day to qualify for offer. Subject to availability. Cannot request a specific stylist</p>
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
