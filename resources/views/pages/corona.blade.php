@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Can you believe it has been 9 whole weeks since we closed our doors?! As it stands we have a potential reopening date of the 4th July. This could change as it isn\’t set in stone. We are not currently taking any bookings until we have our confirmed dates and our staff rota\’s in place. We are unsure yet what our guidelines will be on working within the salon so we may have to re-jig things.',
	'keywords' => '',
	'ogtitle' => 'COVID-19 Update',
	'ogdescription' => 'Can you believe it has been 9 whole weeks since we closed our doors?! As it stands we have a potential reopening date of the 4th July. This could change as it isn\’t set in stone. We are not currently taking any bookings until we have our confirmed dates and our staff rota\’s in place. We are unsure yet what our guidelines will be on working within the salon so we may have to re-jig things.',
	'ogimage' => url('/') . '/images/corona/corona_meta_4.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
    'title' => 'Paul Kemp Hairdressing - Corona - Hairdressers in Warrington'
	])
@stop

@section('content')

<div id="corona">
    <div class="columns">
		<div class="section column is-7">
            <h1 class="title is-1">COVID-19 Update</h1>
            <h2 class="subtitle is-3">Updated 27th May 2020</h2>
            <p><strong>Can you believe it has been 9 whole weeks since we closed our doors?!</strong></p>
        <p>We hope everybody had a good bank holiday weekend and that you are all doing well and are as excited to get your hair done as we are to do it!</p>
        <p><strong>Here's our latest update...</strong></p>
        <p>As it stands we have a potential reopening date of the 4th July. This could change as it isn’t set in stone. We are not currently taking any bookings until we have our confirmed dates and our staff rota’s in place. We are unsure yet what our guidelines will be on working within the salon so we may have to re-jig things.</p>
        <p>In the mean time we will be shortly posting a page where you can register to be contacted for an appointment for when we do open the diary so we can get everyone booked in. We can see who has missed appointments and you will be contacted accordingly, but by all means please add your name to the list to confirm you want to get in as we understand some people may wish to wait still and see what the situation is like closer to the time.</p>
        <p><em>Please bare with us and know we will do our best to get everyone in in the shortest time possible, but we are expecting high demand upon reopening. With potential restricted hours per stylist we will do our upmost to accommodate you.</em></p>
        <p>Thanks so much to all of our clients for being so patient and understanding that this situation is out of all of our hands. We cannot wait to get back to doing what we love best!</p> 
        <p><strong>Please revisit this page for updates and to find out when our registration form is live.</strong></p>
        <h3 class="title is-5">We hope to see you all very soon, we miss you! xx</h3>
        </div>
        <div class="column">
            <figure class="image is-hidden-mobile">
                {{ Html::image('images/corona/corona.jpg') }}   
            </figure>
        </div>
    </div>
</div>

@stop