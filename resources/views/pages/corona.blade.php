@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'COVID-19 Closure Update',
	'keywords' => '',
	'ogtitle' => 'COVID-19 Closure Update',
	'ogdescription' => 'Following the government guidelines we are still currently closed and will remain so until further notice. Our booking systems are currently closed too as we can’t guarantee any appointments at the minute.
        The team are sad to have to stop doing what we love but we know we\'ll be back up and running in the not too distant future',
	'ogimage' => url('/') . '/images/corona/corona3_meta.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
    'title' => 'Paul Kemp Hairdressing - Corona - Hairdressers in Warrington'
	])
@stop

@section('content')

<div id="corona">
    <div class="columns">
		<div class="section column is-7">
            <h1 class="title is-1">COVID-19 Closure Update</h1>
            <h2 class="subtitle is-3">Updated 16th April 2020</h2>
            <p><strong>Following the government guidelines we are still currently closed and will remain so until further notice.</strong></p>
            <p>Please check back to our page for updates on our potential opening date. Our booking systems are currently closed too as we can’t guarantee any appointments at the minute.</p>
            <p>If you have appointments already booked in they remain unaffected, if we open before your appointment you will keep this appointment. We will be contacting everyone who has missed an appointment due to the salon being closed to arrange this for your earliest convenience - again once we have a better idea of when we'll be reopening.</p>
            <p>We hope you are all staying safe and well. For all the key workers out there, keep up the amazing work you’re doing 🙌 We can’t wait to be back at it making you all look and feel fresh again 😊</p>
            <h3 class="title is-4">Take care - The PK Team x</h3>
        </div>
        <div class="column">
            <figure class="image is-hidden-mobile">
                {{ Html::image('images/corona/corona_2.jpg') }}   
            </figure>
        </div>
    </div>
</div>

@stop