@extends('layouts.prospect') 

@section('head')

@include('layouts.partials.pros_head', [
	'title' => 'New Client Taster Package'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<script>fbq('track', 'CompleteRegistration');</script>



<section id="prospect">

<section id="prospect-entry">
	
<h2 class="red">Your route to hair perfection</h2>

<p>The <strong>New Client Taster Package</strong> is <span class="red"> completely FREE</span> 
plus there will be some special incentives on the day! <span class="red"><br>(including FREE products and special offers)</span></p>
<p><strong>Just fill in the form below and we'll be in touch!</strong></p>
	
@if(Session::has('message'))
	<div id="success" class="ProspectSuccess">
	<p>{{{ Session::get('message') }}}</p>
	{!! link_to('/', 'Visit our website to find out more about us!') !!}
	</div>
@else

	@include('prospect._form_taster')

@endif

</section>  <!--prospect-entry-->

</section> <!--prospect-->

@stop