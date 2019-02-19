@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'The Paul Kemp Hairdressing team comprises of 8 highly skilled stylists in all areas of hairdressing. Cutting, Colouring, Blowdrying plus specialist services like Kebelo and Opti-Smooth. You know you\'re in good hands',
	'keywords' => 'skilled stylists, talented hairdressers, qualified hairdressers, professional stylists',
	'ogtitle' => 'Meet the PK Team',
	'ogdescription' => 'The Paul Kemp Hairdressing team comprises of 8 highly skilled stylists in all areas of hairdressing. Cutting, Colouring, Blowdrying plus specialist services like Kebelo and Opti-Smooth. You know you\'re in good hands',
	'ogimage' => url('/') . '/images/ogimage/myimage.png',
	'title' => 'Paul Kemp Hairdressing - Meet the Team - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="team">

		@foreach($team_members as $team_member)

		<a href="{{ URL::to('team/' . $team_member->class) }}">
			<div class="card">
				<div class="card-image">
					<figure class="image is-4by3">
						<img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
					</figure>
				</div>
				<div class="card-content">
						<div class="media-content">
							<p class="title is-4">{{ $team_member->name }}</p>
							<p class="subtitle is-6">{{ $team_member->level }}</p>
						</div>
					</div>

					<div class="content">
						<p>{{ $team_member->para1 }}</p>
					<p>{{ $team_member->para2 }} {{ $team_member->para3 }} </p>
					<p class="teamprice">Average Cut &amp; Colour price with {{ $team_member->review_link}} : &pound;{{ $team_member->price }}*</p>
					</div>
				</div>
		</a>

		@endforeach

	<div>
		<p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
	</div>

</section>

@stop