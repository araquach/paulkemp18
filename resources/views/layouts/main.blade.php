<!DOCTYPE HTML>
<html>

@section('head')

@show

<body>

	<div class="container">

		<header>

			<section class="hero is-primary">
			  <div class="hero-body">
			    <div class="container">
			      <h1 class="title">
			        Paul Kemp Hairdressing
			      </h1>
			      <h2 class="subtitle">
			        Hairdressers in Warrington
			      </h2>
			    </div>
			    <nav class="nav">					
					<ul>
						<li class="button is-link">{!! link_to('/', 'Home') !!}</li>
						<!--<li>{!! link_to('offers', 'Offers') !!}</li>-->
						<li class="button is-link">{!! link_to('salon', 'The Salon') !!}</li>
						<li class="button is-link">{!! link_to('team', 'Team') !!}</li>
						<li class="button is-link">{!! link_to('blog', 'Blog') !!}</li>
						<li class="button is-link">{!! link_to('recruitment', 'Recruitment') !!}</li>
						<li class="button is-link">{!! link_to('men', 'Men') !!}</li>
						<li class="button is-link">{!! link_to('prices', 'Prices') !!}</li>
						<li class="button is-link">{!! link_to('contact', 'Contact') !!}</li>
					</ul>
					@if(!Request::is('booking'))
						{!! link_to('booking', 'Book Now', ['class' => 'book-now']) !!}
					@endif
				</nav>
			  </div>
			</section>
			
		</header>

		<div>
			@yield('content')
		</div>

		<footer class="footer">
			<div class="container">
				<div class="columns">
					<div class="column">
						<a href="http://www.schwarzkopf-professional.com/" target="_blank">{{ Html::image('images/footer/schwarzkopf.png', 'Schwarzkopf - The Hairdressers choice') }}</a>
					</div>
					<div class="column">
						<a href="http://www.tigihaircare.com/consumer/en-UK/bedhead/" target="_blank">{{ Html::image('images/footer/bedhead.png', 'Bedhead - Proffessional Hairdressing') }}</a>
					</div>
					<div class="column">
						<a href="http://www.catwalkbytigi.com" target="_blank">{{ Html::image('images/footer/catwalk.png', 'Tigi Catwalk') }}</a>
					</div>
					<div class="column">
						<a href="http://www.tigihaircare.com/consumer/en-UK/b4men/default.asp" target="_blank">{{ Html::image('images/footer/bformen.png', 'B for Men - mens products for hairdressers') }}</a>
					</div>
					<div class="column">
						<a href="http://www.ghdhair.com/" target="_blank">{{ Html::image('images/footer/ghd.png', 'ghd - for hairdressers') }}</a></li>
					</div>
					<div class="column">
						<a href="http://www.tigihaircare.com/consumer/en-UK/sfactor/default.asp" target="_blank">{{ Html::image('images/footer/sfactor.png', 'S Factor - quality brand for hairdressers') }}</a>
					</div>
				</div>

				<div id="social">
					<a href="https://www.facebook.com/PaulKempHairdressing" target="_blank"><div class="social_logo facebook"></div></a>
					<a href="https://www.instagram.com/paulkemphairdressing1" target="_blank"><div class="social_logo instagram"></div></a>
					<a href="https://twitter.com/paulkemphair" target="_blank"><div class="social_logo twitter"></div></a>
					<a href="https://plus.google.com/+PaulKempHairdressingWarrington/posts?hl=en" target="_blank"><div class="social_logo google"></div></a>
					<a href="https://www.pinterest.co.uk/PKHairdressing/" target="_blank"><div class="social_logo pinterest"></div></a>
				</div>
			</div>
		</footer>

	</div>

</body>

</html>