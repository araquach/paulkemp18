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
		<div class="column is-7">
			@if(Session::has('message'))
		        <div class="alert alert-info">
		    		{{{ Session::get('message') }}}
		        </div>
	    @endif
			<h1 class="title is-3 has-text-primary">Join Our Amazing Team</h1>
			<p class="is-size-5">We're looking for creative stylists to join our dynamic team. If you've got a <strong>passion for hairdressing</strong> and want to progress to the next level or if you're looking for somewhere new to do what you love then just fill in the form below.</p>
			<br>
			<a href="https://www.instagram.com/paulkemphairdressing1/" target="_blank" class="button is-primary">Check out our Instagram</a>
		</div>
	</div>

	<div class="columns section is-size-5-mobile">
		<div class="column is-7">
			<h2 class="title is-3 has-text-primary">See what some of our current team members say about PK&hellip;</h2>
			<div class="columns">
				<div class="column is-4">
					<figure class="image">
						<img src="/images/potential/izzy.jpg" alt="Izzy Lamb">
					</figure>
				</div>
				<div class="column">
					<h3 class="title is-4">Izzy Lamb - Senior Stylist</h3>
					<p>&quot;I've been a stylist at PK for over 8 years and I love it! The team work hard at making our clients look and feel amazing which makes us feel great too! Working with a team of talented stylists and seeing the apprentices develop so quickly makes my job even more rewarding. The relaxed environment makes coming to work everyday a pleasure.&quot;</p>
				</div>
			</div>
			<div class="columns">
				<div class="column is-5">
					<figure class="image">
						<img src="/images/potential/brad.jpg" alt="Brad Ryan">
					</figure>
				</div>
				<div class="column">
					<h3 class="title is-4">Brad Ryan - Stylist</h3>
					<p>&quot;I joined Paul Kemp Hairdressing 9 months ago and I instantly settled in thanks to the friendly team members. My client base has grown rapidly and I'm on course to becoming a senior stlyist. The ongoing training and workshop sessions have helped me progress quickly and I'm looking forward to developing my skills to the next level.&quot;</p>
				</div>
			</div>
			<div class="columns">
				<div class="column is-5">
					<figure class="image">
						<img src="/images/potential/lauren.jpg" alt="Abi Clarke">
					</figure>
				</div>
				<div class="column">
					<h3 class="title is-5">Lauren Watson - Junior Stylist</h3>
					<p>&quot;I joied the team as an apprentice and I'm now a Junior Stylist. Working with so many great stylists has helped me develop my skills fast and I'm already building up my own client base. I can't wait to become a Graduate stylist and start learning more advanced techniques.&quot;</p>
				</div>
			</div>

			<p class="is-size-4">Fill in the form below if you're interested - one of our team will be in touch soon.</p>
			<p class="is-size-6">Your information will be used only for this application. All applications will be strictly confidential</p>


		<div id="form">
			@if (count($errors) > 0)
			<ul class="box">
			    @foreach($errors->all() as $error)
			        <li class="has-text-danger">{{{ $error }}}</li>
			    @endforeach
			</ul>
			@endif

			{!! Form::open(array('action' => 'PotentialEmployeeController@store')) !!}

				<h2 class="title is-5">Your details</h2>

				{{ Form::hidden('salon', '2') }}

				<div class="field">
				{!! Form::label('full_name', 'Full Name', ['class' => 'label']) !!}
				{!! Form::text('full_name', old('full_name'), ['class' => 'input']) !!}
				{!! $errors->first('full_name', '<div class="has-text-danger">:message</div>') !!}
				</div>

				<div class="field">
				{!! Form::label('mobile', 'Mobile Number', ['class' => 'label']) !!}
				{!! Form::text('mobile', old('mobile'), ['class' => 'input']) !!}
				{!! $errors->first('mobile', '<div class="has-text-danger">:message</div>') !!}
				</div>

				<div class="field">
				{!! Form::label('position', 'Current Position', ['class' => 'label']) !!}
				{!! Form::select('position', array(
					'senior stylist' => 'Senior Stylist',
					'stylist' => 'Stylist',
					'apprentice' => 'Apprentice/Junior',
					'chairrenter' => 'Self employed/Chair renter',
					'new to hairdressing'=> 'New To Hairdressing',
					'other'=> 'Other',
					), old('position'), ['placeholder' => '-- Please Select --'], ['class' => 'input']) !!}
				{!! $errors->first('position', '<div class="has-text-danger">:message</div>') !!}
				</div>

				{{ Form::hidden('status', 'Not Contacted') }}

				<div class="field">
				{!! Form::submit('Submit', ['class' => 'button']) !!}
				</div>

			{!! Form::close() !!}
		</div>

	</div>
	<div class="column">
		<figure class="image">
			<img src="/images/potential/potential_montage.jpg" alt="The Team">
		</figure>
	</div>
</div>
</div>
@stop
