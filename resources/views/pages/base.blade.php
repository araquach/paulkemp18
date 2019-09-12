@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Training and developing our team to the highest possible standard has always been a major priority for us here at Paul Kemp Hairdressing. Along with our sister salon Jakata we\'ve produced some incredible talent from scratch and helped existing stylists polish their skills to the next level.',
	'keywords' => 'Hair Academy, trainee hairdressers, apprentices, hair school',
	'ogtitle' => 'Introducing Base - Our New Training Academy',
	'ogdescription' => 'Training and developing our team to the highest possible standard has always been a major priority for us here at Paul Kemp Hairdressing. Along with our sister salon Jakata we\'ve produced some incredible talent from scratch and helped existing stylists polish their skills to the next level.',
	'ogimage' => url('/') . '/images/salon/base_meta.jpg',
	'title' => 'Paul Kemp Hairdressing - Base Hairdressing - Hairdressers in Warrington'
	])

@stop

@section('content')

<div id="base">
  <div>
		<h1>Introducing Base - Our New Training Academy</h1>

		<p><strong>Training and developing our team to the highest possible standard has always been a major priority for us here at Paul Kemp Hairdressing. Along with our sister salon Jakata we've produced some incredible talent from scratch and helped existing stylists polish their skills to the next level.</strong></p>
		<p>We decided to centralise our training and put all of our apprentices and graduate stylists under one roof in our brand new <strong>Base Hair Academy!</strong></p>
		<p>We gave our old Jakata premises a major facelift and created an amazing training environment and working space that both our staff and clients can appreciate</p>
		<div>
				<img src="http://via.placeholder.com/250x250" alt="Base Hairdressing">
				<img src="http://via.placeholder.com/250x250" alt="Base Hairdressing">
				<img src="http://via.placeholder.com/250x250" alt="Base Hairdressing">
				<img src="http://via.placeholder.com/250x250" alt="Base Hairdressing">
		</div>
		<p>All of our <strong>apprentices</strong> and <strong>graduate stylists</strong> are now located at Base where we can offer our full selection of hair services at a fraction of the cost. All services are fully supervised by Senior Stylists and all our usual high quality products are used.</p>

		<h2>The Base Team</h2>

		<div>
			<div>
				<img src="http://via.placeholder.com/200x220" alt="Abi">
			</div>
			<div>
				<h3>Abi</h3>
				<p>Abi is an extremely progressive hairdresser and has recently been promoted to a Stylist. She produces some beautiful cuts, colours and styles</p>
				<p>Her friendly, approachable personality ensures she always gets 5 star feedback from her clients</p>
				<p>Abi temporarily joins us from PK to help get Base up and running.</p>
			</div>
		</div>
		<div>
			<div>
				<img src="http://via.placeholder.com/200x220" alt="Lauren T">
			</div>
			<div>
				<h3>Lauren T</h3>
				<p>Lauren is a Graduate Stylist with loads of flair and a huge passion for the industry. She loves creating bold, statement looks, particularly short cuts and funky styles.</p>
				<p>She loves clients that are looking for something a bit different and open to ideas - if you're wanting a new look then book in for a consultation with her!</p>
			</div>
		</div>
		<div>
			<div>
				<img src="http://via.placeholder.com/200x220" alt="David">
			</div>
			<div>
				<h3>David</h3>
				<p>David is our latest recruit. He completed his training at Andrew Collinge Graduates in Liverpool and is now looking to work his way to stylist level.</p>
				<p>He produces beautiful colour and cutting work and his blow-dry's are stunning!</p>
			</div>
		</div>
		<div>
			<div class="base-team-ind-pic">
				<img src="http://via.placeholder.com/200x220" alt="Lauren W">
			</div>
			<div>
				<h3>Lauren W</h3>
				<p>Lauren is working her way to become a graduate stylist after completing 1 year of her apprenticeship with us. Her skills are building fast and she's not afraid to try out something new.</p>
				<p>She loves all aspects of hairdressing and is eager to take on clients.</p>
			</div>
		</div>
		<div>
			<div>
				<img src="http://via.placeholder.com/200x220" alt="Lucy">
			</div>
			<div>
				<h3>Lucy</h3>
				<p>Lucy is in the second year of her apprenticeship and is already producing some amazing work.</p>
				<p>She has recently opened her column up and is looking to gain experience in all aspects of hairdressing.</p>
				<p>Get booked in with Lucy to see what she can do for you!</p>
			</div>
		</div>

		<h2>Prices</h2>

		<table>
			<tr>
				<th></th>
				<th>Advanced<br>Graduate</th>
				<th>Graduate</th>
				<th>Junior Stylist</th>
				<th>Junior</th>
			</tr>
			<tr>
				<th>Cut, Dry & Style</th>
				<td>&pound;30</td>
				<td>&pound;25</td>
				<td>&pound;15</td>
				<td>&pound;10</td>
			</tr>
			<tr>
				<th>Colour</th>
				<td>&pound;40</td>
				<td>&pound;35</td>
				<td>&pound;15</td>
				<td>&pound;10</td>
			</tr>
			<tr>
				<th>Blow Dry</th>
				<td>&pound;15</td>
				<td>&pound;15</td>
				<td>&pound;10</td>
				<td>&pound;5</td>
			</tr>
		</table>
		<p>All prices are a guide. A specific price will be quoted on consultation. A skin test is required 48 hours before any colour service for new clients</p>

		<h2>Models required!</h2>

		<p>We have model training days where we require volunteers to have hair done for training purposes, usually on Tuesday/Wednesday day time. These session are practically free (a nominal charge to cover colour product costs sometimes applies). Please add your name to our model database here if you are usually available on these days << link >> and we'll contact you when we have a session that fits your needs.</p>

		<p>To book an appointment with on of our talented stylists at Base Hairdressing call <strong>01925 444449</strong></p>

		<div>
			<h2>Follow Base</h2>
			<a href="https://www.instagram.com/basehairdressing/" target="_blank"><img src="/images/footer/social/instagram.png" alt="Instagram"></a><img src="" alt="">
			<a href="https://www.facebook.com/basehairdressing/" target="_blank"><img src="/images/footer/social/facebook.png" alt="Facebook"></a>
		</div>

		<div id="fb-like">
			<div class="fb-like" data-href="http://www.jakatasalon.co.uk/salon" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true">
			</div>
		</div>
	</div>
</div>

@stop
