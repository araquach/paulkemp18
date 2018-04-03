@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Special offer',
	'keywords' => 'Paul Kemp Hairdressing, offer, special offer, hairdressing offer',
	'title' => 'Paul Kemp Hairdressing - Special offer for you - Hairdressers in Warrington'
	])
	
@stop

@section('content')
    
    <section id="new">
        
    @if(Session::has('message'))
    <div class="applicationSuccess">
    {{{ Session::get('message') }}}
    </div>
    @endif
	
	<section id="new_copy">
	
	<h2>Hi {{ $offer->first_name }}, we'd like to introduce you to our latest stylist...</h2>
	<p>Louise Bailey joined us in November and is quickly establishing herself within the PK team.</p>
	<p>She has over two years experience and since qualifying worked in a busy salon in Grappenhall where she specialised in men's hairdressing, before moving over to join the PK team.</p>
	<p>She is also highly skilled in women's hairdressing, particularily cutting and styling and is now in the process of some intensive colour training to get her colouring skills up to the high standard of the rest of the team.</p>
	<p>To ease Louise into the team we've introduced her at Graduate stylist level but she will very quickly be moved up to Stylist level within the next few months. 
	<strong>Now is a great time to book in with her as you won't find a better price for such a skilled stylist - plus we've launched some special offers so you'd be mad not to book in!</strong></p>
	<p class="so_med"><strong>Special offers for Louise</strong></p>
	
	<p class="so_big"><strong>&pound;35</strong></p>
	<p class="so_med">Cut &amp; Colour Package</p>
	<p class="so_big"><strong>&pound;20</strong></p>
	<p class="so_med">Cut, Dry &amp; Style</p>
	<p class="so_small">with Louise throughout Jan/Feb</p>
	
	@include('offer._form')
	
	<p class="specOffer_contact"><strong>Call: 01925 444488</strong> to book</p>
	<p class="so_small">Please note: a skin test required 48 hours prior to any colour service</p>
	<p class="so_med">We look forward to seeing you in the salon soon!</p>
	

	</section> <!--#new_copy-->

</section> <!--end #new-->


@stop