@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Temporary Closure for PK',
	'keywords' => '',
	'ogtitle' => 'Temporary Closure for PK',
	'ogdescription' => 'We\'ve made the decision to temporarily close Paul Kemp Hairdressing as of Tuesday 24th March for a minimum of 2 weeks to stay inline with the Governments Social distancing recommendations. 
        The team are sad to have to stop doing what we love but we know we\'ll be back up and running in the not too distant future',
	'ogimage' => url('/') . '/images/corona/corona2_meta.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
    'title' => 'Paul Kemp Hairdressing - Corona - Hairdressers in Warrington'
	])
@stop

@section('content')

<div id="corona">
    <div class="columns">
		<div class="section column is-7">
        <h1>Temporary Closure for PK</h1>
        <p>We've made the decision to temporarily close Paul Kemp Hairdressing as of Tuesday 24th March for a minimum of 2 weeks to stay inline with the Governments Social distancing recommendations. 
        The team are sad to have to stop doing what we love but we know we'll be back up and running in the not too distant future.</p>
        <p>We'll be following Government advice with regards to reopening when the time is right.</p>
        <p>Thanks for all the support over this crazy time - we're in a good position to get through this and we can't wait to sort out your grown out styles and get rid of those 3 inch roots for you!</p>
        <p><strong>Take care - The PK Team x</strong></p>
        <p>P.S Please don't be tempted to reach for those box dyes or attempt home hair colouring! Having to correct hundreds of colours when we return will send us over the edge 😂</p>
        </div>
        <div class="column">
            <figure class="image is-hidden-mobile">
                {{ Html::image('images/corona/corona_2.jpg') }}   
            </figure>
        </div>
    </div>
</div>

@stop