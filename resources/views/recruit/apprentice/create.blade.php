@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'At Paul Kemp Hairdressing all of our training is carried out in-house, you gain maximum exposure to observe skilled stylists whilst gaining valuable hands-on experience.',
	'keywords' => 'apprentiships, apprentice, trainee stylist, trainee hairdresser, graduate stylist, hairdressing training',
	'ogtitle' => 'Become a PK apprentice',
	'ogdescription' => 'At Paul Kemp Hairdressing all of our training is carried out in-house, you gain maximum exposure to observe skilled stylists whilst gaining valuable hands-on experience.',
	'ogimage' => url('/') . '/images/ogimage/myimage.png',
	'title' => 'Paul Kemp Hairdressing - Apprentice Application - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="application">
	<div class="columns">
		<div class="column is-6 section">
			@if(Session::has('message'))
			    <div>
			    {{{ Session::get('message') }}}
			    </div>
			@endif

			<div>
				<h2 class="title is-3 has-text-primary">Join the team</h2>
			<h3 class="subtitle is-4 has-text-primary">Apprentice Position</h3>

				{!! link_to('stylist/create', 'Apply for a stylist position', ['class' => 'button is-primary']) !!}
				<br><br>
				<p><strong>At Paul Kemp Hairdressing all of our training is carried out in-house, you gain maximum exposure to observe skilled stylists whilst gaining valuable hands-on experience.</strong></p>
				<p><em>Our aim is to train and develop our apprentices to the highest level, in the shortest possible time. This requires the highest level of commitment from you. If you have the passion to do whatever it takes to be a top stylist then Paul Kemp Hairdressing can help you to get there!</em></p>
				<p>Please complete ALL sections of the form before submitting your application.</p>
				<p>We will contact you as soon as a position becomes available.</p>

				@include('recruit.apprentice._form')

			</div>
		</div>
	</div>
</div>
@stop