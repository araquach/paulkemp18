<!DOCTYPE HTML>
<html>

@section('head')

@show

<body>

	<div class="container">
		<div class="inner container">	
			<header class="hero is-primary">
				<div class="hero-body">
					<nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
						<div class="navbar-brand">
							<a class="navbar-item" href="{{ URL::to('/') }}">
								<img src="{{ asset('images/main/pk_logo.png') }}" width="100">
							</a>

							<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
								<span aria-hidden="true"></span>
								<span aria-hidden="true"></span>
								<span aria-hidden="true"></span>
							</a>
						</div>

						<div id="navbarBasicExample" class="navbar-menu">
							<div class="navbar-start">
								<a class="navbar-item" href="{!! URL::to('/') !!}">
									Home
								</a>

								<a class="navbar-item" href="{!! URL::to('salon') !!}">
									Salon
								</a>

								<a class="navbar-item" href="{!! URL::to('team') !!}">
									Team
								</a>

								<a class="navbar-item" href="{!! URL::to('team') !!}">
									Blog
								</a>

								<div class="navbar-item has-dropdown is-hoverable">
									<a class="navbar-link">
										More
									</a>

									<div class="navbar-dropdown">
										<a class="navbar-item" href="{!! URL::to('recruitment') !!}">
											Recruitment
										</a>
										<a class="navbar-item" href="{!! URL::to('men') !!}">
											Men
										</a>
										<a class="navbar-item" href="{!! URL::to('prices') !!}">
											Prices
										</a>
									</div>
								</div>
							</div>

							<div class="navbar-end">
								<div class="navbar-item">
									<div class="buttons">
										<a class="button is-primary" href="contact">
											<strong>Contact Us</strong>
										</a>
										<a class="button is-light" href="{!! URL::to('booking') !!}">
											Book Now
										</a>
									</div>
								</div>
							</div>
						</div>
					</nav>
				</div>
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
	</div>
</body>

</html>