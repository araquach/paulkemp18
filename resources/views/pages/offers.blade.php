@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Colour and Cut packages for new clients this New Year',
	'keywords' => 'hair offers, hairdressing offers, salon offers, Paul Kemp Hairdressing offers',
	'ogtitle' => 'New Year Offers',
	'ogdescription' => 'Colour and Cut packages for new clients this New Year',
	'ogimage' => url('/') . '/images/offer/june16_meta.jpg',
	'title' => 'Paul Kemp Hairdressing - Offers - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="offersMain">

<!--<h2>New Year Offers</h2>-->

@include('pages.offers.no_offer')

<!--<div class="fb-like" data-href="http://www.paulkemphairdressing.com/offers" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>-->

</section> <!--end offersMain-->

</section> <!--end #offers-->

@stop
