@extends('layouts.prospect') 

@section('head')

@include('layouts.partials.pros_head', [
	'description' => 'Choosing a new salon and stylist can be a daunting prospect. We can make it really easy for you!
	Try our New Client Taster Package - it\'s FREE
	You\'ll get to experience the salon and meet our fantastic team. We\'ll discuss all your hair needs, advise you on styling, products and let you know the best route to achieving the hairstyle you\'ve always wanted!',
	'keywords' => 'Paul Kemp Hairdressing, taster package, new clients, offers',
	'ogtitle' => 'Your route to hair perfection',
	'ogdescription' => 'Choosing a new salon and stylist can be a daunting prospect. We can make it really easy for you!
	Try our New Client Taster Package - it\'s FREE
	You\'ll get to experience the salon and meet our fantastic team. We\'ll discuss all your hair needs, advise you on styling, products and let you know the best route to achieving the hairstyle you\'ve always wanted!',
	'ogimage' => url('/') . '/images/prospect/taster_og.jpg',
	'title' => 'New Client Taster Package'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<section id="prospect">

	<section id="prospect-entry">
	
		<h2 class="red">Your route to hair perfection</h2>

		<p><em>Choosing a new salon and stylist can be a daunting prospect. We can make it really easy for you!</em><br>
		<p>Simply book in with us for our</p>
		<h1 class="red">New Client Taster Package</h1>
		<p class="red"><strong>It's completely FREE</strong></p>
		
		<section id="taster-image"></section>
		
		<p>Here's what's involved:</p>
		<ul class ="consultation-list">
			<li>Time out to asses your hair</li>
			<li>Styling advice from an experienced professional</li>
			<li>Discuss future and current fashion trends</li>
			<li>A FREE blow dry or dry styling</li>
			<li>Haircare tips and product information</li>
			<li>A plan set for any hair recovery you may need</li>
			<li>Start things moving towards achieving the look you want</li>
			<li>Make you aware of any special offers on future appointments</li>
		</ul>
		
		<p>You'll get to experience the salon and meet our fantastic team. 
			We'll discuss all your hair needs, advise you on styling, products and let you know the best route to achieving the hairstyle you've always wanted!</p>
	
		<a href="{{ URL::to('taster/create') }}#prospect-entry" class="link">Click here to arrange yours</a>

	
	</section>  <!--prospect-entry-->

</section> <!--prospect-->

@stop