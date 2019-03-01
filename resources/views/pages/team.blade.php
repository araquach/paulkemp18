@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'The PK Team is a hotbed of creative talent. Nine amazing stylists with a vast array of knowledge and skills are here to give you a style that will make you look amazing!',
	'keywords' => 'skilled stylists, talented hairdressers, qualified hairdressers, professional stylists',
	'ogtitle' => 'Meet the PK Team',
	'ogdescription' => 'The PK Team is a hotbed of creative talent. Nine amazing stylists with a vast array of knowledge and skills are here to give you a style that will make you look amazing!',
	'ogimage' => url('/') . '/images/staff/group_shot/PK_team_2019_meta.jpg',
	'title' => 'Paul Kemp Hairdressing - Meet the Team - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="team">

	<div id="team-list">

		@foreach($team_members as $team_member)

			<a href="{{ URL::to('team/' . $team_member->class) }}">
				<section class="team-ind" id="{{ $team_member->class }}">
					<h3>{{ Html::image('images/staff/' . $team_member->class . '.jpg', $team_member->name) }} {{ $team_member->name }} - {{ $team_member->level }}</h3>
					<p>{{ $team_member->para1 }}</p>
					<p>{{ $team_member->para2 }} {{ $team_member->para3 }} </p>
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