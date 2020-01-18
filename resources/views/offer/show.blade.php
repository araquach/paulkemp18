@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Special offer',
	'keywords' => 'Paul Kemp Hairdressing, offer, special offer, hairdressing offer',
	'title' => 'Paul Kemp Hairdressing - Special offer for you - Hairdressers in Warrington'
	])

@stop

@section('content')

<div>
	<section id="offers" class="section">
		<div class="columns">
			<div class="column is-9">

				@if(Session::has('message'))
				<div class="applicationSuccess">
				{{{ Session::get('message') }}}
				</div>
				@endif
				<div class="box">
					<h1 class="title is-2 has-text-primary">New Year Offers for {{ $offer->first_name }} {{ $offer->last_name}}</h1>
					<p>Hi {{ $offer->first_name }}, we've not seen you in Paul Kemp Hairdressing for a while and we'd love to have you back!</p>
					<p>We have a great team of talented stylists at different levels so there's definitely a price to suit you.</p>
					<p>If you're on a tight budget after Christmas then why not give our new <strong>Base Hair Academy</strong> a go?
					An amazing team of Junior Stylists & Graduates</p>
					<p>Take advantage of the offers there by clicking the link: <a href="https://basehairdressing.com/offers" target="_blank">Base Hairdressing Offers</a></p>
					<p>Or Call 01925 444499 to take advantage of the offers below - Just quote the offer code when you book</p>
				</div>
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
				  	<p class="is-size-5">Throughout January &amp; February</p>
						<p>Offer Code: NY20HP</p>
				  	<small class="is-size-7">Not with any other offer. Skin test required 48 hours before any colour service</small>
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
						<p>Offer Code: NY20D</p>
					<small class="is-size-7">Not with any other offer - additional costs apply for dark to light and crazy colours<br>Skin test required 48hrs before any colour service</small>
				</section>
			</div>
		</div>

		{!! link_to('booking', "Book now", array('class'=>'button')) !!}

		<br><br>

		@include('offer._form')

		<br><br>
	</section>
</div> <!--end #offers-->

@stop
