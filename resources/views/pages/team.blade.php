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

<div id="team">
	<section class="hero is-large team-image">
        <div class="hero-body">
        </div>
    </section>

		<div class="section columns is-multiline">
	
				@foreach($team_members as $team_member)
				<div class="column is-4">
					
					<a href="{{ URL::to('team/' . $team_member->class) }}">
						<div class="card">
							<div class="card-image">
								<figure class="image">
									{{ Html::image('images/staff/' . $team_member->class . '.jpg', $team_member->name) }}
								</figure>
							</div>
							<div class="card-content">
								<div class="media">
									<div class="media-content">
										<p class="title is-3 has-text-primary">{{ $team_member->name }}</p>
										<p class="subtitle has-text-primary">{{ $team_member->level }}</p>
									</div>
								</div>
								<div class="content">
									<p>{{ $team_member->para1 }}</p>
									<p>{{ $team_member->para2 }}</p>
									<p>{{ $team_member->para3 }}</p>
									<p class="price">Average Cut &amp; Colour price with {{ $team_member->review_link}} : &pound;{{ $team_member->price }}*</p>
								</div>
							</div>
						</div>
					</a>
					
				</div>
				@endforeach	

		</div>

		

		

	<div class="level">
		<p class="level-item"><strong class="price">*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</strong></p>
	</div>

</div>

@stop