@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Book your appointment online. Select your services, then select your stylist and preferred time.Please note - a skin test is required 48hrs before any colour service',
	'keywords' => 'Paul Kemp Hairdressing, location, map, contact, book, bookings',
	'ogtitle' => 'Book an appointment',
	'ogdescription' => 'Paul Kemp Hairdressing is located on the corner of Sankey Street and Springfield Street in Warrington Town Centre (opposite the Golden Gates)',
	'title' => 'Paul Kemp Hairdressing - Book an appointment - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="bookings">

    <h1>Make a booking</h1>
    
    <section>
        <div class="iframe-container">
            <iframe src="https://paulkemp.phorest.me/book" width="850" height="800" frameborder="0"></iframe>
        </div>
    </section>

</section>

@stop