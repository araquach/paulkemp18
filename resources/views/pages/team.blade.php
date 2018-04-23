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
	<ul>
		<li>
			<p class="up">Shell</p>
		</li>
		<li>
			<p>Kel</p>
		</li>
		<li>
			<p class="up">Jo</p>
		</li>
		<li>
			<p>Izzy</p>
		</li>
		<li>
			<p class="up">Kate</p>
		</li>
		<li>
			<p>Tash</p>
		</li>
		<li>
			<p class="up">Leon</p>
		</li>
	</ul>
	
	@foreach($team_members as $team_member)

		<a href="{{ URL::to($team_member->class) }}">
			<section id="{{ $team_member->class }}">
				<h3>{{ Html::image('images/staff/' . $team_member->class . '.jpg', $team_member->name) }} {{ $team_member->name }} - {{ $team_member->level }}</h3>
				<p>{{ $team_member->para1 }}</p>
				<p>{{ $team_member->para2 }}</p>
				<p class="teamprice">Average Cut &amp; Colour price with Kelly : &pound;{{ $team_member->price }}*</p>
			</section>
		</a>

	@endforeach


</section>

<section id="teambottom">
	<p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>

@stop