@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
		'description' => 'We\'re getting closer and closer to our reopening date and we can\'t wait!! We are not taking booking until we have a confirmed date as it\'s still a bit up in the air at the moment.',
		'ogtitle' => 'Register for your appointment',
		'ogdescription' => 'We\'re getting closer and closer to our reopening date and we can\'t wait!! We are not taking booking until we have a confirmed date as it\'s still a bit up in the air at the moment.',
		'ogimage' => url('/') . '/images/corona/register.jpg',
		'ogimagewidth' => '1200',
		'ogimageheight' => '628',
		'title' => 'Paul Kemp Hairdressing - Register Your Details - Hairdressers in Warrington'
	])

@stop

@section('content')

<section id="corona">
	<div class="columns">
		<div class="column section is-7">

		@if(Session::has('message'))
			<div class="box is-size-4">
			{{{ Session::get('message') }}}
			</div>
		@endif

			<h1 class="title is-2 has-text-primary">Register for your appointment</h1>	

			<p class="is-size-4">We're getting closer and closer to our reopening date and we can't wait!!</p>
			<p>We are not taking booking until we have a confirmed date as it's still a bit up in the air at the moment. <strong>Saturday July 4th</strong> is looking the most likely but there is the potential this could be brought forward or pushed back. We're still in the process of creating new schedules for the team to minimise the number of people in the salon as your safety is our priority.</p>
			<p>Each team member will be contacting their own clients to arrange bookings about a week or two before our opening date. Anybody who was already booked in will be contacted first. We will be working really hard to make sure everyone gets an appointment that suits them in the quickest possible time.</p>
			<p class="is-size-4">If you are wanting to book an appointment, please fill in the form below to ensure we've got your correct information</p>
			<p>Please fill in as much information as possible in the form below, we will get back to you as soon as we can</p>

			<ul>
				@foreach($errors->all() as $error)
					<li class="has-text-danger">{{{ $error }}}</li>
				@endforeach
			</ul>

			{!! Form::open(array('action' => 'BookingController@store')) !!}

				{{ Form::hidden('salon', '2') }}
				
				<div class="field">
				{!! Form::label('first_name', 'First Name', ['class' => 'label']) !!}
				{!! Form::text('first_name', old('first_name'), ['class' => 'input']) !!}
				{!! $errors->first('first_name', '<div class="has-text-danger">:message</div>') !!}
				</div>
				
				<div class="field">
				{!! Form::label('last_name', 'Last Name', ['class' => 'label']) !!}
				{!! Form::text('last_name', old('last_name'), ['class' => 'input']) !!}
				{!! $errors->first('last_name', '<div class="has-text-danger">:message</div>') !!}
				</div>
				
				<div class="field">
				{!! Form::label('mobile', 'Mobile Number', ['class' => 'label']) !!}
				{!! Form::text('mobile', old('mobile'), ['class' => 'input']) !!}
				{!! $errors->first('mobile', '<div class="has-text-danger">:message</div>') !!}
				</div>

				<div class="field">
					<div class="select is-multiple">
					{!! Form::label('stylist', 'Your Stylist', ['class' => 'label']) !!}
					{!! Form::select('stylist', array(
						'Izzy' => 'Izzy',
						'Kellie' => 'Kellie',
						'Michelle' => 'Michelle',
						'Jo' => 'Jo',
						'Brad' => 'Brad',
						'Abi'=> 'Abi',
						'David'=> 'David',
						'Unknown'=> 'Unknown'
						), old('stylist'), ['placeholder' => 'Select Stylist']) !!}
					{!! $errors->first('stylist', '<div class="has-text-danger">:message</div>') !!}
					</div>
				</div>
				<br>
				
				<div class="field">
				{!! Form::submit('Submit', ['class' => 'button']) !!}
				</div>
			
			{!! Form::close() !!}
		</div>
		<div class="column">
            <figure class="image is-hidden-mobile">
                {{ Html::image('images/corona/corona.jpg') }}   
            </figure>
		</div>
	</div>
</section>

@stop
