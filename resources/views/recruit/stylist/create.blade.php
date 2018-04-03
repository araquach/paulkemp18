@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'The Paul Kemp Hairdressing team is always on the look out for talented new stylists. Fill out your information here to apply for a position',
	'keywords' => 'Paul Kemp Hairdressing, stylist job, stylist recruitment, hairdresser job, hairdresser recruitment',
	'ogtitle' => 'Become a PK Stylist',
	'ogdescription' => 'The Paul Kemp Hairdressing team is always on the look out for talented new stylists. Fill out your information here to apply for a position',
	'ogimage' => url('/') . '/images/ogimage/myimage.png',
	'title' => 'Paul Kemp Hairdressing - Stylist Application - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<script type="text/javascript">
window.addEvent('domready', function(){
	  
	  var myAccordion = new Fx.Accordion($$('.reveal'), $$('.elements'), {
	      display: 0,
	      alwaysHide: true
	  });
	  
});
</script>

<div id="application">
@if(Session::has('message'))
	<div class="applicationSuccess">
	{{{ Session::get('message') }}}
	</div>
@endif

<div id="application-form">
<h1>Join the team: Stylist Position</h1>
<p class="applink">{!! link_to('apprentice/create', 'Click here to apply for an apprentice position') !!}</p>
<p class="application">Please complete ALL sections of the form before submitting your application.</p>
<p class="application">We will contact you as soon as a position becomes available.</p>

@include('recruit.stylist._form')

</div> 
</div> 

@stop