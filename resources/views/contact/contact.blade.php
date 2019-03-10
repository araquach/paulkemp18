@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Paul Kemp Hairdressing is located on the corner of Sankey Street and Springfield Street in Warrington Town Centre (opposite the Golden Gates)',
	'keywords' => 'Paul Kemp Hairdressing, location, map, contact, book, bookings',
	'ogtitle' => 'Contact Us',
	'ogdescription' => 'Paul Kemp Hairdressing is located on the corner of Sankey Street and Springfield Street in Warrington Town Centre (opposite the Golden Gates)',
	'title' => 'Paul Kemp Hairdressing - Contact Us - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="contact">

	<section class="hero is-large contact-image">
        <div class="hero-body">
        </div>
    </section>

    <div class="columns">

		<div class="column">

    		<a id="map"></a>
    		
    		<section class="section is-size-5-mobile">
			
	    		<h2 class="title 2 has-text-primary">Contact Us</h2>

			    <h3 class="title is-4 has-text-primary">How to find us:</h3>
			    <p class="is-size-6 is-size-5-mobile"><strong>Paul Kemp Hairdressing</strong> is located on the corner of <em>Sankey Street</em> and <em>Springfield Street</em> in Warrington Town Centre
			    (opposite the Golden Gates).</p>
			    
		    	<h3 class="title is-4 has-text-primary">Address:</h3>
		    	<p><strong>83 Sankey Street<br>
		      	Warrington<br>
		      	WA1 1SL</strong></p>
		    	<p class="is-size-4"><strong>01925 444488</strong></p>


		    	<figure class="image">
			    	<img src="/images/streetmap.gif" alt="Map" class="image">
			    </figure>

		    	<br>

			    <p>The closest parking is available at the <em>Town Hall car park </em>across the road from us. The entrance is 
			  	immediately after the Golden Gates. It's pay and display at a very reasonable rate.</p>	


			  	<h3 class="title is-4 has-text-primary">Opening Times:</h3>
			  	<ul id="times" class="has-text-weight-bold is-size-6">
			  		<li>Monday: Closed</li>
			  		<li>Tuesday: 9.00 - 18.00</li>
			  		<li>Wednesday: 11.00 - 20.00</li>
			  		<li>Thursday: 11.00 - 20.00</li>
			  		<li>Friday: 9.00 - 18.00</li>
			  		<li>Saturday: 9.00 - 17.30</li>
			  		<li>Sunday: Closed</li>
		  		</ul>

	  		</section>
		  		
		</div>
		<div class="column is-7">

			<section class="section contact-form">

				@if(Session::has('message'))
				    <div id="success">
				    	{{{ Session::get('message') }}}
				    </div>
				@endif

				<h2 class="title 2 has-text-primary">Enquiries &amp; Bookings</h2>
				<p class="is-size-5-mobile">Please fill in as much information as possible in the form below. If you wish to make an appointment state the preferred date and time plus the service you require</p>

				{!! Form::open(array('action' => 'ContactController@sendEmail' )) !!}

					@if (count($errors) > 0)
						<div id="errors" class="errors has-text-danger">
							<p>Please fix the following input errors:</p>
							<ul>
						   		@foreach($errors->all() as $error)
						        	<li>{{{ $error }}}</li>
						    	@endforeach
							</ul>
						</div>
					@endif

					<div class="field">
						{!! Form::label('first_name', 'First Name', ['class' => 'label']) !!}
						{!! Form::text('first_name', old('second_name'), ['class' => 'input']) !!}
						{!! $errors->first('first_name', '<div class="errorMessage">:message</div>') !!}
					</div>
					
					<div class="field">
						{!! Form::label('second_name', 'Second Name', ['class' => 'label']) !!}
						{!! Form::text('second_name', old('second_name'), ['class' => 'input']) !!}
						{!! $errors->first('second_name', '<div class="errorMessage">:message</div>') !!}
					</div>
					
					<div class="field">
						{!! Form::label('email', 'Email Address', ['class' => 'label']) !!}
						{!! Form::email('email', old('email'), ['class' => 'input']) !!}
						{!! $errors->first('email', '<div class="errorMessage">:message</div>') !!}
					</div>
					
					<div class="field">
						{!! Form::label('email_confirm', 'Confirm Email Address', ['class' => 'label']) !!}
						{!! Form::email('email_confirm', '',['class' => 'input']) !!}
					</div>
					
					<div class="field">
						{!! Form::label('mobile', 'Contact Number', ['class' => 'label']) !!}
						{!! Form::text('mobile', old('mobile'), ['class' => 'input']) !!}
						{!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}
					</div>
					
					<div class="field">
						{!! Form::label('body', 'Your Message', ['class' => 'label']) !!}
						{!! Form::textarea('body', old('body'), ['class' => 'input']) !!}
						{!! $errors->first('body', '<div class="errorMessage">:message</div>') !!}
					</div>
					
					<div class="field">
						{!! Form::submit('Submit', ['class' => 'button']) !!}
					</div>
				{!! Form::close() !!}
			</section>
		</div>

	</div>

</div>

@stop