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

	<div id="team-list">

		@foreach($team_members as $team_member)

			<a href="{{ URL::to($team_member->class) }}">
				<section class="team-ind" id="{{ $team_member->class }}">
					<h3>{{ Html::image('images/staff/' . $team_member->class . '.jpg', $team_member->name) }} {{ $team_member->name }} - {{ $team_member->level }}</h3>
					<p>{{ $team_member->para1 }}</p>
					<p>{{ $team_member->para2 }}</p>
					<p class="teamprice">Average Cut &amp; Colour price with {{ $team_member->review_link}} : &pound;{{ $team_member->price }}*</p>
				</section>
			</a>

		@endforeach

	</div>

	<div id="teambottom">
		<p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
	</div>

</section>

@stop