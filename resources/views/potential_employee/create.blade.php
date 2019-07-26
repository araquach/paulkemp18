@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'We\'re looking for creative stylists and apprentices to join our dynamic team. If you\'ve got a passion for hairdressing and want to progress to the next level or if you\'re looking for somewhere new to do what you love then this could be for you',
	'keywords' => 'hair recruitment warrington, hairdressing jobs warrington, stylist jobs warrington',
	'ogtitle' => 'Join Our Amazing Team',
	'ogdescription' => 'We\'re looking for creative stylists to join our dynamic team. If you\'ve got a passion for hairdressing and want to progress to the next level or if you\'re looking for somewhere new to do what you love then this could be for you!',
	'ogimage' => url('/') . '/images/potential/potential_meta.jpg',
	'title' => 'Paul Kemp Hairdressing - Join Our Hairdressing Team - Hairdressers in Warrington'
	])

@stop

@section('content')

<div id="potential">

	<div class="columns section">
		<div class="column is-8">
			@if(Session::has('message'))
		        <div class="alert alert-info">
		    		{{{ Session::get('message') }}}
		        </div>
	    @endif

			<h1>Join Our Amazing Team</h1>
			<p>We're looking for creative stylists to join our dynamic team. If you've got a <strong>passion for hairdressing</strong> and want to progress to the next level or if you're looking for somewhere new to do what you love then just fill in the form below.</p>

			<a href="https://www.instagram.com/paulkemphairdressing1/" target="_blank">Check out our latest work on Instagram to see what we're about</a>

			<div>
				<h2>See what some of our current team members say about PK&hellip;</h2>
				<div>
						<h3>Kellie Reedy (Salon Manager)</h3>
						<p>&quot;I've worked at Paul Kemp Hairdressing since the day it opened. I have the pleasure of working with a great team - not everyone can say that! I like to come in to the salon and be surround by my friends every day!  We are always learning new skills and keeping up to date with the latest trends&quot;</p>
				</div>
				<div>
					<div>
						<h3>Izzy Lamb (Senior Stylist)</h3>
						<p>&quot;I love working at Paul Kemp hairdressing because every day is different to the last. Meeting new people and making them look and feel amazing is a pleasure. No matter who works in the salon we always have a great team vibe and colleagues become good friends&quot;</p>
					</div>
				</div>

				<div>
					<h3>Jo Birchall (Senior Stylist)</h3>
					<p>&quot;Some Text to go here&quot;</p>
				</div>

				<div>
						<h3>Abi Clarke (Graduate Stylist)</h3>
						<p>&quot;Working at PK is amazing, I love seeing the drive and passion people have for what they do, we all push each other to be the best we can possibly be. Everyday offers something different and I’m always learning something new.&quot;</p>
				</div>
			</div>

			<div>
				<p>Fill in the form below if you're interested - one of our team will be in touch soon.</p>
				<p>Your information will be used only for this application. All applications will be strictly confidential</p>
			</div>

		<div id="form" class="potential form">

		<ul>
		    @foreach($errors->all() as $error)
		        <li>{{{ $error }}}</li>
		    @endforeach
		</ul>

		{!! Form::open(array('action' => 'PotentialEmployeeController@store', 'class' => 'form')) !!}

			<h2>Your details</h2>

			{{ Form::hidden('salon', '2') }}

			<div class="row">
			{!! Form::label('full_name', 'Full Name') !!}
			{!! Form::text('full_name', old('full_name')) !!}
			{!! $errors->first('full_name', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="row">
			{!! Form::label('mobile', 'Mobile Number') !!}
			{!! Form::text('mobile', old('mobile')) !!}
			{!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="row">
			{!! Form::label('position', 'Current Position') !!}
			{!! Form::select('position', array(
				'senior stylist' => 'Senior Stylist',
				'stylist' => 'Stylist',
				'apprentice' => 'Apprentice/Junior',
				'chairrenter' => 'Self employed/Chair renter',
				'new to hairdressing'=> 'New To Hairdressing',
				'other'=> 'Other',
				), old('position'), ['placeholder' => '-- Please Select --']) !!}
			{!! $errors->first('position', '<div class="errorMessage">:message</div>') !!}
			</div>

			{{ Form::hidden('status', 'Not Contacted') }}

			<div class="row buttons">
			{!! Form::submit('Submit') !!}
			</div>

		{!! Form::close() !!}

		</div><!-- form -->
		</div>
		<div class="column">

		</div>
	</div>
</div>


@stop
