@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'See what some of our recent clients said about us',
	'keywords' => 'Paul Kemp Hairdressing reviews, PK client reviews',
	'ogtitle' => 'See what some of our clients said about us..',
	'ogdescription' => $reviews->first()->review,
	'ogimage' => url('/') . '/images/reviews/reviews-meta.jpg',
	'title' => 'Paul Kemp Hairdressing - Reviews - Hairdressers in Warrington'
	])

@stop

@section('content')

<div id="reviews">
	<div class="columns section">
		<div class="column is-8">
			<h2 class="title is-3 has-text-primary">Some of our recent client reviews</h2>

			<h3 class="subtitle is-5 has-text-primary">Filter by stylist</h3>

			<div class="columns is-multiline is-mobile">
				@foreach($team_members as $team_member)
					<div class="column is-3-desktop is-2-tablet is-4-mobile">
						<a href="{{ URL::to('reviews/' . $team_member->class) }}">
							<div class="card">
								<div class="card-image">
									<figure class="image is-small">
										{{ Html::image('images/staff/' . $team_member->class . '.jpg', $team_member->name) }}
									</figure>
								</div>
								<div class="card content has-background-primary">
									<div class="content has-text-white">
								    	{{ $team_member->review_link }}
								    </div>
								</div>
							</div>
						</a>
					</div>
				@endforeach
			</div>

			@foreach($reviews as $review)
				<div class="box">
					<p class="is-size-5">"{{ $review->review }}"</p>
					<small>{{ remove_client($review->client) }}</small><br>
					<small>Hair by: {{ remove_staff($review->staff) }}</small>
				</div>
			@endforeach
		</div>
	</div>
</div>

@stop
