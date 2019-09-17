@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Apply to be a model'
	])

@stop

@section('content')

<div id="hairmodel">

    <div id="hairmodel-copy">

			@if(Session::has('message'))
        <div class="success">
          {{{ Session::get('message') }}}
        </div>
      @endif

      <h1>We need models!</h1>

      <p>We're looking for models for our training days! Get your hair done for practically free! (sometimes a nominal charge to cover product costs applies)</p>
  		<p>If you'd like to volunteer simply add your name to our model database and we'll contact you when we have a session that fits your needs</p>
      <p>Please provide some info about your hair to allow us to determine which sessions best suit your needs</p>
      <ul>
        <li>Hair Length</li>
        <li>Hair Texture</li>
        <li>Existing colour (Foils/Balayage/Full Head etc)</li>
        <li>Any style ideas you would like</li>
      </ul>
      <small>A skin test is required 48 hours before we can colour your hair if you haven't been to us before. We will not be able to carry out any colour treatments if we don't have a record of this.</small>

      <div class="form">
        {!! Form::open(array(
        	'action' => 'HairModelController@store', 'id' => 'form'
        )) !!}

				{!! Form::open(array(
					'action' => 'ProspectController@store', 'id' => 'prospect-form'
				)) !!}

        <p class="note">Fields with <span class="required">*</span> are required.</p>

        @if (count($errors) > 0)
          <div id="hairmodel-form_es_" class="errorSummary">
          		<p>Please fix the following input errors:</p>
          		<ul>
          	   		 @foreach($errors->all() as $error)
          	        <li>{{{ $error }}}</li>
          	    	@endforeach
          		</ul>
          </div>
        @endif

        <div class="row">
          {!! Form::label('name', 'Full Name') !!}
          {!! Form::text('name') !!}
          {!! $errors->first('name', '<div class="errorMessage">:message</div>') !!}
        </div>

        <div class="row">
          {!! Form::label('mobile', 'Mobile Number') !!}
          {!! Form::text('mobile') !!}
          {!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}
        </div>

        <div class="row">
          {!! Form::label('hairinfo', 'Additional Information') !!}
          {!! Form::textarea('hairinfo') !!}
          {!! $errors->first('hairinfo', '<div class="errorMessage">:message</div>') !!}
        </div>

        <div class="row buttons">
      	   {!! Form::submit('Send') !!}
        </div>

        {!! Form::close() !!}
      </div>
    </div>
</div>

@stop
