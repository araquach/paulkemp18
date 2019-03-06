@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'The Paul Kemp Hairdressing team is always on the look out for talented new stylists. Fill out your information here to apply for a position',
	'keywords' => 'Paul Kemp Hairdressing, stylist job, stylist recruitment, hairdresser job, hairdresser recruitment',
	'ogtitle' => 'Become a PK Stylist',
	'ogdescription' => 'The Paul Kemp Hairdressing team is always on the look out for talented new stylists. Fill out your information here to apply for a position',
	'ogimage' => url('/') . '/images/ogimage/myimage.png',
	'title' => 'Paul Kemp Hairdressing - Stylist Application - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="application">

	<div class="columns">
		<div class="column is-6">
			<section class="section has-background-white">

				@if(Session::has('message'))
					<div class="applicationSuccess">
					{{{ Session::get('message') }}}
					</div>
				@endif

				<div>
					<h2 class="title is-3 has-text-primary">Join the team</h2>
					<h3 class="subtitle is-4 has-text-primary">Stylist Position</h3>
		
					{!! link_to('apprentice/create', 'Apply for an apprentice position', ['class' => 'button is-primary']) !!}
					<br><br>
					<p>Please complete ALL sections of the form before submitting your application.</p>
					<p>We will contact you as soon as a position becomes available.</p>

					@include('recruit.stylist._form')

				</div>
			</section>
		</div> 
	</div>
</div>

<script type="text/javascript" src="/node_modules/bulma-extensions/bulma-accordion/dist/bulma-accordion.min.js"></script>
<script>
	var accordions = bulmaAccordion.attach();
</script>
@stop