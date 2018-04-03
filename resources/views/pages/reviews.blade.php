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

<section id="reviews">
	
	<h1>Some of our recent client reviews</h1>
	
	<h3>Filter by stylist</h3>
	
	<ul class="stylist-filter">
		<a href="{{ URL::to('reviews/kellie') }}"><li class="review-kellie">Kellie</li></a>
		<a href="{{ URL::to('reviews/izzy') }}"><li class="review-izzy">Izzy</li></a>
		<a href="{{ URL::to('reviews/jo') }}"><li class="review-jo">Jo</li></a>
		<a href="{{ URL::to('reviews/michelle') }}"><li class="review-michelle">Michelle</li></a>
		<a href="{{ URL::to('reviews/leon') }}"><li class="review-leon">Leon</li></a>
		<a href="{{ URL::to('reviews/kate') }}"><li class="review-kate">Kate</li></a>
		<a href="{{ URL::to('reviews/matt') }}"><li class="review-matt">Matt</li></a> 
		<a href="{{ URL::to('reviews/louise') }}"><li class="review-louise">Louise</li></a>
		<a href="{{ URL::to('reviews/abi') }}"><li class="review-abi">Abi</li></a>
	</ul>
	
	@foreach($reviews as $review)
		<div class="review">
			<p>"{{ $review->review }}"</p>
			<small>{{ remove_client($review->client) }}</small><br>
			<small>Hair by: {{ remove_staff($review->staff) }}</small>
		</div>
	@endforeach
</section>

@stop