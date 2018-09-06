@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'We\'re looking for creative stylists to join our dynamic team. If you\'ve got a passion for hairdressing and want to progress to the next level or if you\'re looking for somewhere new to do what you love then this could be for you',
	'keywords' => 'hair recruitment warrington, hairdressing jobs warrington, stylist jobs warrington',
	'ogtitle' => 'Join Our Amazing Team',
	'ogdescription' => 'We\'re looking for creative stylists to join our dynamic team. If you\'ve got a passion for hairdressing and want to progress to the next level or if you\'re looking for somewhere new to do what you love then this could be for you',
	'ogimage' => url('/') . '/images/potential/potential_fb.jpg',
	'title' => 'Paul Kemp Hairdressing - Join Our Hairdressing Team - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="potential">
	
	<div id="potential-copy">
		
		@if(Session::has('message'))
	        <div class="alert alert-info">
	    		{{{ Session::get('message') }}}
	        </div>
    	@endif
	
		<h1>Join Our Amazing Team</h1>
		<p>We're looking for creative stylists to join our dynamic team. If you've got <strong>a passion for hairdressing</strong> and want to progress to the next level or if you're looking for somewhere new to do what you love then just fill in the form below.</p>
		
		<a href="https://www.instagram.com/paulkemphairdressing1/" target="_blank">Check out our latest work on Instagram to see what we're about</a>

		<div id="testimonials">	
			<h2>See what some of our current team members say about PK&hellip;</h2>
			<div class="testimonial">
				<div class="testimonial-img-1"></div>
				<div class="testimonial-copy">
					<h3>Kellie Reedy (Salon Manager)</h3>
					<p>&quot;
						Some Text to go here
					&quot;</p>
				</div>
				</div>
			<div class="testimonial">
				<div class="testimonial-img-2"></div>
				<div class="testimonial-copy">
					<h3>Izzy Lamb (Senior Stylist)</h3>
					<p>&quot;
						Some Text to go here
					&quot;</p>
				</div>
			</div>
			<div class="testimonial">
				<div class="testimonial-img-3"></div>
				<div class="testimonial-copy">
					<h3>Abi Clarke (Graduate Stylist)</h3>
					<p>&quot;
						Some Text to go here
					&quot;</p>
				</div>
			</div>
		</div>
		<div class="excitement">
			<p>Fill in the form below if you're interested - one of our team will be in touch soon.</p>
			<p class="small">Your information will be used only for this application. All applications will be strictly confidential</p>
		</div>
		
		
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

@stop