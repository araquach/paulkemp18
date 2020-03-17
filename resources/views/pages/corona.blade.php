@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Open as usual for your hair needs',
	'keywords' => '',
	'ogtitle' => 'Open as usual for your hair needs',
	'ogdescription' => 'We thought we\'d let you know we\'re open for business as usual! We\’re operating the salon as normal - other than implementing some extra measures...',
	'title' => 'Paul Kemp Hairdressing - Corona - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="corona">
    <div class="columns">
		<div class="section column is-7">
            <h1 class="title has-text-primary is-3">Open as usual for your hair needs</h1>
            <p class="is-size-5">We thought we'd let you know we're open for business as usual! 
            We have appointments available with your preferred stylist.</p>
            <p>We are monitoring the situation closely day by day. We’re operating the salon as normal - other than implementing some extra measures...</p>
            <ul>
                <li>We disinfect our stations after every treatment using an antibacterial solution</li>
                <li>Our staff are washing their hands after every single client, using handwashing technique as set out by the WHO</li>
                <li>We disinfect our reception area and all door handles at regular intervals throughout the day</li>
            </ul>
            <p><strong>We request Apple/GooglePay/contactless transactions where possible and limit cash payments</strong></p>
            <p>Please try and attend your appointment on your own where possible.</p>
            <p>We're checking in with staff daily to ensure they are health and well, and have not been in contact with anyone who has travelled from the worst affected Covid-19 areas.</p>
            <p>If you have a cold, a sniffle, a cough, fever or are feeling unwell, firstly, we are sorry to hear it! And secondly, 
            we would ask that you kindly reschedule your appointment here so that we can see you when you’re back feeling fighting fit.</p>
            {!! link_to('booking', "Book & Reschedule Here", array('class'=>'button is-primary')) !!}
            <br><br>
            <p>If and when the time comes that we need to take extra measures, 
            we will do so in the most responsible way as advised by the right authorities. We will ensure we keep you updated.</p>
            <p>In the meantime, we’re here for you and your hair needs and we look forward to seeing you for your next appointment 😀</p>
            <p class="is-size-5"><strong>Call 01925 444488 for more info or to reschedule</strong></p>
        </div>
        <div class="column">
            <figure class="image is-hidden-mobile">
                {{ Html::image('images/corona/corona.jpg') }}   
            </figure>
        </div>
    </div>
</div>

@stop