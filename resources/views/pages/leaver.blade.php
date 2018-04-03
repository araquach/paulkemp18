@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Tash Bailey is no longer at PK',
	'ogtitle' => 'Tash Bailey is no longer at PK',
	'ogdescription' => 'We\'re sorry to inform you that Tash Bailey is no longer at PK. She has decided to move on to pursue a new career direction',
	'ogimage' => url('/') . '/images/ogimage/matt_meta.jpg',
	'title' => 'Paul Kemp Hairdressing -  Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="leaver">
	
	<section id="leavercopy">
	    
        <h2>Tash Bailey is no longer at PK</h2>
        <p>We're sorry to inform you that <em>Tash Bailey</em> is no longer at PK. She has decided to move on to pursue a new career direction. We are sad to see her go as she's been part of the team for many years and we wish her all the best in the future.</p>
        <p>If you were a regular client of Tash's we apologise for her departure and we hope it hasn't caused you any inconvenience.</p>
        <p>We're pleased to say that we have transferred <strong>Matt Lane</strong> over from Jakata who is at the same level as Tash. He will be available, along with other PK team members to look after you in the future.</p>
        <p><em>We sincerely hope we can continue to give you the same fantastic service as we really appreciate your loyalty to the salon. We have a great offer to help you transfer across to Matt (or one of our other team members)&hellip;</em></p>
       
        <p class="offer">We'd like to offer you 10% off your next visit</p>
        
        <p>offer applies to any PK stylist on your next visit</p> <p class="small">(one offer per person, not transferable, ends 30/09/17)</p>
        
        <p><a href="{{ URL::to('booking') }}" class="offer">Book in with Matt or one of our stylists here ></a></p>
        
        <p><em>Pictured: Matt Lane</em></p>
    
    </section> <!--end leavercopy-->
    
    <section id="leaver-pic"></section>

</section> <!--end leaver-->

@stop