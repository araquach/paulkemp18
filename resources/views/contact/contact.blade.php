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

<section id="contact" class="group">
    <section id="locmap">
    <a id="map"></a>
    <h2>Contact Us</h2>

    <h3>How to find us:</h3>
    <p><strong>Paul Kemp Hairdressing</strong> is located on the corner of <em>Sankey Street</em> and <em>Springfield Street</em> in Warrington Town Centre
    (opposite the Golden Gates).</p>
   
    <div class="address"><h3>Address:</h3>
    <p>83 Sankey Street<br>
      Warrington<br>
      WA1 1SL
    </p>
    <p><strong>01925 444488</strong></p>
    </div> <!--address-->
    
    <div id="map"></div>
    
    <p>The closest parking is available at the <em>Town Hall car park </em>across the road from us. The entrance is 
  	immediately after the Golden Gates. It's pay and display at a very reasonable rate.</p>		
  	<h3>Opening Times:</h3>
  	<ul id="times">
  		<li>Monday: Closed</li>
  		<li>Tuesday: 9.00 - 18.00</li>
  		<li>Wednesday: 11.00 - 20.00</li>
  		<li>Thursday: 11.00 - 20.00</li>
  		<li>Friday: 9.00 - 18.00</li>
  		<li>Saturday: 9.00 - 17.30</li>
  		<li>Sunday: Closed</li>
  	</ul>
  </section> <!--locmap-->
</section> <!--contact-->


<div id="form">

@if(Session::has('message'))
    <div id="success">
    {{{ Session::get('message') }}}
    </div>
@endif

<h2>Enquiries &amp; Bookings</h2>
<p>Please fill in as much information as possible in the form below. If you wish to make an appointment state the preferred date and time plus the service you require</p>
<div class="form">

@if (count($errors) > 0)
<div id="contact-form_es_" class="errorSummary">
		<p>Please fix the following input errors:</p>
		<ul>
	   		 @foreach($errors->all() as $error)
	        <li>{{{ $error }}}</li>
	    	@endforeach
		</ul>
</div>
@endif

{!! Form::open(array('action' => 'ContactController@sendEmail', 'class' => 'form')) !!}

	<div class="row">
	{!! Form::label('first_name', 'First Name') !!}
	{!! Form::text('first_name', old('first_name')) !!}
	{!! $errors->first('first_name', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
	{!! Form::label('second_name', 'Second Name') !!}
	{!! Form::text('second_name', old('second_name')) !!}
	{!! $errors->first('second_name', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
	{!! Form::label('email', 'Email Address') !!}
	{!! Form::email('email', old('email')) !!}
	{!! $errors->first('email', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
	{!! Form::label('email_confirm', 'Confirm Email Address') !!}
	{!! Form::email('email_confirm') !!}
	</div>
	
	<div class="row">
	{!! Form::label('mobile', 'Contact Number') !!}
	{!! Form::text('mobile', old('mobile')) !!}
	{!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
	{!! Form::label('body', 'Your Message') !!}
	{!! Form::textarea('body', old('body')) !!}
	{!! $errors->first('body', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row buttons">
	{!! Form::submit('Submit') !!}
	</div>
	
{!! Form::close() !!}


</div>
</div><!-- form -->

@stop