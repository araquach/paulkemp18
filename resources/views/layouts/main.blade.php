<!DOCTYPE HTML>
<html class="no-js">

@section('head')

@show

<body>

	<div class="container" id="page">

		<header class>
			<div id="logo" class="logo"></div>
			<h1>Paul Kemp Hairdressing</h1>
			<h2>Hairdressers in Warrington</h2>

			@if(Request::is('prospect/*'))
			<nav class="group">
				<ul>
					<li>{!! link_to('prospect/taster', 'Taster Package applicants') !!}</li>
					<li>{!! link_to('prospect/freeproducts', 'Free Product applicants') !!}</li>
					<li>{!! link_to('/logout', 'Logout') !!}</li>
				</ul>
			</nav>
			
			@else
			
			<nav>
				<ul>
					<li>{!! link_to('/', 'Home') !!}</li>
					<!--<li>{!! link_to('offers', 'Offers') !!}</li>-->
					<li>{!! link_to('salon', 'The Salon') !!}</li>
					<li>{!! link_to('team', 'Team') !!}</li>
					<li>{!! link_to('blog', 'Blog') !!}</li>
					<li>{!! link_to('recruitment', 'Recruitment') !!}</li>
					<li>{!! link_to('men', 'Men') !!}</li>
					<li>{!! link_to('prices', 'Prices') !!}</li>
					<li>{!! link_to('contact', 'Contact') !!}</li>
				</ul>
			</nav>
			
			@endif
			
			@if(!Request::is('booking'))
				{!! link_to('booking', 'Book Now', ['class' => 'book-now']) !!}
			@endif
			
		</header>

		<div id="content">
			@yield('content')
		</div>

		<div class="clear"></div>

	<footer>
	<ul id="footer_images">
	<li><a href="http://www.schwarzkopf-professional.com/" target="_blank">{{ Html::image('images/footer/schwarzkopf.png', 'Schwarzkopf - The Hairdressers choice') }}</a></li>
	<li><a href="http://www.tigihaircare.com/consumer/en-UK/bedhead/" target="_blank">{{ Html::image('images/footer/bedhead.png', 'Bedhead - Proffessional Hairdressing') }}</a></li>
	<li><a href="http://www.catwalkbytigi.com" target="_blank">{{ Html::image('images/footer/catwalk.png', 'Tigi Catwalk') }}</a></li>
	<li><a href="http://www.tigihaircare.com/consumer/en-UK/b4men/default.asp" target="_blank">{{ Html::image('images/footer/bformen.png', 'B for Men - mens products for hairdressers') }}</a></li>
	<li><a href="http://www.ghdhair.com/" target="_blank">{{ Html::image('images/footer/ghd.png', 'ghd - for hairdressers') }}</a></li>
	<li><a href="http://www.tigihaircare.com/consumer/en-UK/sfactor/default.asp" target="_blank">{{ Html::image('images/footer/sfactor.png', 'S Factor - quality brand for hairdressers') }}</a></li>
	</ul>
	
	<section id="smallabout">
	<h2><strong>Paul Kemp Hairdressing</strong></h2>
	<ul>
	<li>Paul Kemp Warrington</li>
	<li>Hairdressers Warrington</li> 
	<li>Hair Salon Warrington</li> 
	<li>Salons Warrington</li>
	<li>Hairdressing Warrington</li>
	<li>Hairdressers Cheshire</li> 
	<li>Salons Cheshire</li>
	<li>Hair Salon Cheshire</li> 
	<li>Hairdressing Cheshire</li>
	<li>Hair cutting Warrington</li> 
	<li>Hair colouring Warrington</li>
	<li>Mens Hairdressing Warrington</li>
	<li>Mens Hairdressers Warrington</li> 
	<li>Technical hairdressing</li> 
	<li>Kebelo Warrington</li> 
	<li>Brazilian Blowdry Warrington</li> 
	<li>Opti-Smooth Warrington</li> 
	<li>Fashion styling Warrington</li> 
	<li>Mens cutting Warrington</li> 
	<li>Schwarzkopf Warrington</li> 
	<li>Tigi Warrington</li> 
	<li>Bedhead Warrington</li>
	<li>Osis Warrington</li>
	<li>Aveda Warrington</li>
	<li>Catwalk Warrington</li>
	<li>Bonacure Warrington</li>
	<li>Warrington Hairdressers</li>
	<li>Cheshire Hairdressers</li>
	</ul>
	</section>
	<a href="https://www.facebook.com/PaulKempHairdressing" target="_blank"><div id="facebook"></div></a>
	<a href="https://twitter.com/paulkemphair" target="_blank"><div id="twitter"></div></a>
	<a href="https://plus.google.com/+PaulKempHairdressingWarrington/posts?hl=en" target="_blank"><div id="google"></div></a>
	</footer>
	</div>

</body>

</html>