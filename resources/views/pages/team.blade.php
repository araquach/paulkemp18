@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'The Paul Kemp Hairdressing team comprises of 8 highly skilled stylists in all areas of hairdressing. Cutting, Colouring, Blowdrying plus specialist services like Kebelo and Opti-Smooth. You know you\'re in good hands',
	'keywords' => 'skilled stylists, talented hairdressers, qualified hairdressers, professional stylists',
	'ogtitle' => 'Meet the PK Team',
	'ogdescription' => 'The Paul Kemp Hairdressing team comprises of 8 highly skilled stylists in all areas of hairdressing. Cutting, Colouring, Blowdrying plus specialist services like Kebelo and Opti-Smooth. You know you\'re in good hands',
	'ogimage' => url('/') . '/images/ogimage/myimage.png',
	'title' => 'Paul Kemp Hairdressing - Meet the Team - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="team">
	<ul>
		<li>
			<p class="up">Shell</p>
		</li>
		<li>
			<p>Kel</p>
		</li>
		<li>
			<p class="up">Jo</p>
		</li>
		<li>
			<p>Izzy</p>
		</li>
		<li>
			<p class="up">Kate</p>
		</li>
		<li>
			<p>Tash</p>
		</li>
		<li>
			<p class="up">Leon</p>
		</li>
	</ul>
	
	<a href="{{ URL::to('kel') }}">
		<section id="kel">
			<h3>{{ Html::image('images/staff/kel.jpg', 'Kellie Reedy') }} Kellie Reedy - Senior Stylist</h3>
			<p>Salon manager Kelly has 14 years experience working in Warrington town centre. She is the team leader of the salon. She specialises in long hair styliny and is also one of the extension experts within the salon.</p>
			<p class="teamprice">Average Cut &amp; Colour price with Kelly : &pound;110*</p>
		</section>
	</a>

	<a href="{{ URL::to('jo') }}">
		<section id="jo">
			<h3>{{ Html::image('images/staff/jo.jpg', 'Jo Birchall') }} Jo Birchall - Senior Stylist</h3>
			<p>Jo is a fantastic stylist with many years experience, she's a real long standing asset to the team. Her down to earth nature instantly puts you at ease and her hairdressing skills really shine. She loves doing men and women's hair. Book well in advance
				- she's a very busy stylist. </p>
			<p class="teamprice">Average Cut &amp; Colour price with Jo : &pound;110*</p>
		</section>
	</a>

	<a href="{{ URL::to('izzy') }}">
		<section id="iz">
			<h3>{{ Html::image('images/staff/izzy.jpg', 'Izzy Lamb') }} Isobelle Lamb - Senior Stylist</h3>
			<p>Izzy has quickly established herself as an extremely sought after stylist. Her natural flair with creating beautiful, wearable styles has built her a strong following. Izzy recently won the National <em>Redken Style Innovator</em> award. She is also
				a specialist in extensions.</p>
			<p class="teamprice">Average Cut &amp; Colour price with Izzy : &pound;110*</p>
		</section>
	</a>

	<a href="{{ URL::to('leon') }}">
		<section id="leon">
			<h3>{{ Html::image('images/staff/leon.jpg', 'Leon Pritchard') }} Leon Pritchard - Senior Stylist</h3>
			<p>Leon has quickly built up a strong reputation for his skills in cutting, colouring &amp; styling hair. He's a big hit in the salon due to his friendly personality. He has grown to be a pivotal member of the team and is fast expanding his ever growing
				client base. </p>
			<p class="teamprice">Average Cut &amp; Colour price with Leon : &pound;110*</p>
		</section>
	</a>

	<a href="{{ URL::to('michelle') }}">
		<section id="shell">
			<h3>{{ Html::image('images/staff/michelle_r.jpg', 'Michelle Railton') }} Michelle Railton - Senior Stylist</h3>
			<p>Michelle is a highly skilled hairdresser with loads of experience. She is rapidly becoming a very highly sought after stylist in the salon. She especially loves soft, natural styles and men's indie/mod cutting.</p>
			<p class="teamprice">Average Cut &amp; Colour price with Kate : &pound;110*</p>
		</section>
	</a>

	<a href="{{ URL::to('kate') }}">
		<section id="kate">
			<h3>{{ Html::image('images/staff/kate.jpg', 'Kate O\'halloran') }} Kate O'halloran - Stylist</h3>
			<p>Kate has the ability to put you instantly at ease and with her many years of experience she'll find a look that's perfect for you. Colouring, cutting and long hair styling are her specialities.</p>
			<p class="teamprice">Average Cut &amp; Colour price with Kate : &pound;90*</p>
		</section>
	</a>
	
	<a href="{{ URL::to('matt') }}">
		<section id="matt">
			<h3>{{ Html::image('images/staff/matt.jpg', 'Matt Lane') }} Matt Lane - Stylist</h3>
			<p>Matt recently joined the team after moving over from sister salon Jakata. He's a multi-talented stylist with a great flare for fashion colouring, cutting and styling. He's a popular stylist so book ahead.</p>
			<p class="teamprice">Average Cut &amp; Colour price with Matt : &pound;90*</p>
		</section>
	</a>
	
	<a href="{{ URL::to('louise') }}">
		<section id="louise">
			<h3>{{ Html::image('images/staff/louise.jpg', 'Louise Bailey') }} Louise Bailey - Graduate Stylist</h3>
			<p>Louise recently joined the team from working in a busy salon in Grappenhall. She's a fantastic men's stylist plus is talented in cutting and styling womens hair.</p>
			<p class="teamprice">Average Cut &amp; Colour price with Louise : &pound;55*</p>
		</section>
	</a>
	
	<a href="{{ URL::to('abi') }}">
		<section id="abi">
			<h3>{{ Html::image('images/staff/abi.jpg', 'Abi Clarke') }} Abi Clarke - Junior Stylist</h3>
			<p>Abi joined the team as an apprentice and is on a fast track route to becoming the next PK stylist. She's currently taking on clients who require more basic levels of cutting &amp; colouring.</p>
			<p class="teamprice">Average Cut &amp; Colour price with Abi : &pound;35</p>
		</section>
	</a>

</section>

</section>

<section id="teambottom">
	<p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>

@stop