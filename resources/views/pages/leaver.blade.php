@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Louise Bailey is no longer at PK',
	'ogtitle' => 'Louise Bailey is no longer at PK',
	'ogdescription' => 'We\'re sorry to inform you that Louise Bailey is no longer at PK. She has decided to move on to pursue a new career direction',
	'ogimage' => url('/') . '/images/ogimage/louise_meta.jpg',
	'title' => 'Paul Kemp Hairdressing -  Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="leaver">
	
	<section id="leavercopy">
	    
        <h2>Louise Bailey is no longer at PK</h2>
        <p>We're sorry to inform you that <em>Louise Bailey</em> is no longer at PK. She has decided to move on to pursue a new career direction. We're sorry to see her go as she's been part of the team for a few years now. We wish her all the best in the future.</p>
        <p>If you were a regular client of Louise we apologise for her departure and we hope it won't cause you any inconvenience.</p>
        <p>We have a number of talented stylists that will be able to look after you moving forward. <strong>Abi Clarke</strong> is at the same level as Louise (before Louise got promoted) and she's producing some outstanding work. She has worked closely with Louise over the years so has a similar approach. <strong>Kate O'Halleran</strong> and <strong>Amy Woods</strong> are both great options too. Feel free to take a look at our team page to see if there's a stylist that you'd like to try. <a href="https://paulkemphairdressing.com/team" target="_blank">Check out the full team here</a></p>
        <p><em>We sincerely hope we can continue to give you the same fantastic service as we really appreciate your loyalty to the salon. We have a great offer to help you transfer across to Abi (or one of our other team members)&hellip;</em></p>
       
        <p class="offer">We'd like to offer you 20% off your next visit</p>
        
        <p>offer applies to any PK stylist on your next visit - just mention the offer when booking or when you're paying</p> <p class="small">(one offer per person, not transferable, ends 30/09/18)</p>
        
        <p><a href="{{ URL::to('booking') }}"" target="_blank">Book in with Abi or one of our stylists here ></a></p>
        
        <p><em>Pictured: Louise Bailey &amp; Abi Clarke</em></p>
    
    </section> <!--end leavercopy-->
    
    <section id="leaver-pic"></section>

</section> <!--end leaver-->

@stop