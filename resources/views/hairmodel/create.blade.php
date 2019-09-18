@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Apply to be a model'
	])

@stop

@section('content')

<div id="hair-models">
    <div class="section columns">
      <div class="column is-8 is-size-5-mobile">
			@if(Session::has('message'))
        <div class="box is-size-4">
          {{{ Session::get('message') }}}
        </div>
      @endif

      <h1 class="title is-3 has-text-primary">We need models!</h1>
      <img src="/images/hairmodel/square.jpg" class="is-hidden-tablet">

      <p><strong>We're looking for models for our training days! Get your hair done for practically free! (sometimes a nominal charge to cover product costs applies)</strong></p>
      <p>All training is carried out at our <strong>Base Hair Academy</strong>.</p>
  		<p>If you'd like to volunteer simply add your name to our model database and we'll contact you when we have a session that fits your needs</p>
      <p>Please provide some info about your hair to allow us to determine which sessions best suit your needs</p>
      <ul>
        <li>Hair Length</li>
        <li>Hair Texture</li>
        <li>Existing colour (Foils/Balayage/Full Head etc)</li>
        <li>Any style ideas you would like</li>
      </ul>
      <small>A skin test is required 48 hours before we can colour your hair if you haven't been to us before. We will not be able to carry out any colour treatments if we don't have a record of this.</small>

			<div class="columns">
				<div class="column is-8-desktop">
	        {!! Form::open(array(
	        	'action' => 'HairModelController@store', 'class' => 'form'
	        )) !!}

					{!! Form::open(array(
						'action' => 'ProspectController@store', 'id' => 'prospect-form'
					)) !!}

	        <p>Fields with <span class="has-text-danger">*</span> are required.</p>

	        @if (count($errors) > 0)
	          <div id="errors" class="box has-text-danger">
	          		<p>Please fix the following input errors:</p>
	          		<ul>
	          	   		 @foreach($errors->all() as $error)
	          	        <li class="has-text-danger">{{{ $error }}}</li>
	          	    	@endforeach
	          		</ul>
	          </div>
	        @endif

	        <div class="field">
	          {!! Form::label('name', 'Full Name',  ['class' => 'label required']) !!}
	          {!! Form::text('name', '', ['class' => 'input is-info']) !!}
	          {!! $errors->first('name', '<div class="has-text-danger">:message</div>') !!}
	        </div>

	        <div class="field">
	          {!! Form::label('mobile', 'Mobile Number', ['class' => 'label required']) !!}
	          {!! Form::text('mobile', '', ['class' => 'input is-info']) !!}
	          {!! $errors->first('mobile', '<div class="has-text-danger">:message</div>') !!}
	        </div>

	        <div class="field">
	          {!! Form::label('hairinfo', 'Additional Information', ['class' => 'label required']) !!}
	          {!! Form::textarea('hairinfo', '', ['class' => 'textarea is-info']) !!}
	          {!! $errors->first('hairinfo', '<div class="has-text-danger">:message</div>') !!}
	        </div>

	        <div>
	      	   {!! Form::submit('Send', ["class" => "button"]) !!}
	        </div>

	        {!! Form::close() !!}
	        </div>
	      </div>
			</div>

      <div class="column">
        <figure class="image">
          <img src="/images/hairmodel/tall.jpg" alt="" class="is-hidden-mobile">
        </figure>
      </div>
    </div>
</div>

@stop
