@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Paul Kemp Hairdressing Recruitment - job roles for stylists of all levels',
	'keywords' => 'stylist jobs, hairdressing jobs, Paul Kemp Hairdressing jobs, hairdressing recruitment, stylist recruitment, apprentice jobs, apprentice recruitment, trainee jobs',
	'ogtitle' => 'Join Our Team',
	'ogdescription' => 'The Paul Kemp Hairdressing team is growing fast. We\'re always looking for new talent to expand our already diverse team of hairdressers. We have positions for stylists of all levels with ongoing internal and external training to help you push the boundaries in your career.',
	'ogimage' => url('/') . '/images/ogimage/recruitment.jpg',
	'title' => 'Paul Kemp Hairdressing - Recruitment - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="recruitment">

<h1>Join the Team</h1>

<p>The Paul Kemp Hairdressing team is growing fast. We're always looking for new talent to expand our already diverse team of hairdressers.</p>
<p>We have positions for stylists of all levels with ongoing internal and external training to help you push the boundaries in your career.</p>
<h3>Stylist Position</h3>
<p class="last">Paul Kemp Hairdressing is home to some extremely talented stylists. If you're creative, ambitious and have a natural flair for hairdressing then we could be the perfect environment to push your skills to the next level.</p>
{!! link_to('stylist/create', 'Click Here to apply for for a Stylist position') !!}

<h3>Apprentice Position</h3>
<p>If you're just starting out on the road to becoming a hairdresser, choosing the right place to train and develop is one of the most important decisions you'll ever make!</p>
<p>If you've already started out and feeling you're current training provider isn't fulfilling you're needs then we can step in and accelerate you're development.</p>
<p class="last"><em><strong>If you have the passion to do whatever it takes to be a top stylist then apply now!</strong></em></p>
{!! link_to('apprentice/create', 'Click Here to apply for for aa Apprentice position') !!}

<p class="fancy">An amazing career <br>starts here</p>

</section> <!--end #recruitment-->

@stop
