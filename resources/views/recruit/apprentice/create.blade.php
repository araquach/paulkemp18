@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'At Paul Kemp Hairdressing all of our training is carried out in-house, you gain maximum exposure to observe skilled stylists whilst gaining valuable hands-on experience.',
	'keywords' => 'apprentiships, apprentice, trainee stylist, trainee hairdresser, graduate stylist, hairdressing training',
	'ogtitle' => 'Become a PK apprentice',
	'ogdescription' => 'At Paul Kemp Hairdressing all of our training is carried out in-house, you gain maximum exposure to observe skilled stylists whilst gaining valuable hands-on experience.',
	'ogimage' => url('/') . '/images/ogimage/myimage.png',
	'title' => 'Paul Kemp Hairdressing - Apprentice Application - Hairdressers in Warrington'
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
<h1>Join the team: Apprentice Position</h1>
<p class="applink">{!! link_to('stylist/create', 'Click here to apply for an stylist position') !!}</p>
<p class="application">At Paul Kemp Hairdressing all of our training is carried out in-house, you gain maximum exposure to observe skilled stylists whilst gaining valuable hands-on experience.</p>
<p class="application"><em>Our aim is to train and develop our apprentices to the highest level, in the shortest possible time. This requires the highest level of commitment from you. If you have the passion to do whatever it takes to be a top stylist then Paul Kemp Hairdressing can help you to get there!</em></p>
<p class="application">Please complete ALL sections of the form before submitting your application.</p>
<p class="application">We will contact you as soon as a position becomes available.</p>

@include('recruit.apprentice._form')

</div> <!--application-form-->
</div> <!--application-->

@stop