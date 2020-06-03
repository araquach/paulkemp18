@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
		'description' => '',
		'ogtitle' => '',
		'ogdescription' => '',
		'ogimage' => url('/') . '',
		'title' => 'Jakata Salon - Register Your Details - Hairdressers in Warrington'
	])

@stop

@section('content')

<section id="corona">
	<div class="columns">
		<div class="section column is-7">

		<div class="section contact-form">

		@if(Session::has('message'))
			<div class="success">
			{{{ Session::get('message') }}}
			</div>
		@endif

			<h1 class="title is-2 has-text-primary">Register for your appointment</h1>	

			<p>Please fill in as much information as possible in the form below, we will get back to you as soon as we can</p>

			<ul>
				@foreach($errors->all() as $error)
					<li>{{{ $error }}}</li>
				@endforeach
			</ul>

			{!! Form::open(array('action' => 'BookingController@store')) !!}

				{{ Form::hidden('salon', '2') }}
				
				<div class="field">
				{!! Form::label('first_name', 'First Name', ['class' => 'label']) !!}
				{!! Form::text('first_name', old('first_name'), ['class' => 'input']) !!}
				{!! $errors->first('first_name', '<div class="errorMessage">:message</div>') !!}
				</div>
				
				<div class="field">
				{!! Form::label('last_name', 'Last Name', ['class' => 'label']) !!}
				{!! Form::text('last_name', old('last_name'), ['class' => 'input']) !!}
				{!! $errors->first('last_name', '<div class="errorMessage">:message</div>') !!}
				</div>
				
				<div class="field">
				{!! Form::label('mobile', 'Mobile Number', ['class' => 'label']) !!}
				{!! Form::text('mobile', old('mobile'), ['class' => 'input']) !!}
				{!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}
				</div>

				<div class="field">
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
						), old('stylist'), ['placeholder' => 'Select']) !!}
					{!! $errors->first('stylist', '<div class="errorMessage">:message</div>') !!}
					</div>
				
				<div class="field">
				{!! Form::submit('Submit', ['class' => 'button']) !!}
				</div>
			
			{!! Form::close() !!}

		</div><!-- form -->
		</div>
		<div class="column">
            <figure class="image is-hidden-mobile">
                {{ Html::image('images/corona/corona.jpg') }}   
            </figure>
        </div>
	</div>
</section>

@stop
