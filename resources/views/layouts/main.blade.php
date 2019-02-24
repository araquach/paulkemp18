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
								<img src="{{ asset('images/logos/pk_logo_white.png') }}" width="200">
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

								<a class="navbar-item" href="{!! URL::to('blog') !!}">
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
				
					<div class="columns is-mobile">
						<div class="column">
							<a href="http://www.schwarzkopf-professional.com/" target="_blank">
								<figure class="image is-110x80">
									{{ Html::image('images/footer/schwarzkopf.png', 'Schwarzkopf - The Hairdressers choice') }}
								</figure>
							</a>
						</div>
						<div class="column">
							<a href="http://www.tigihaircare.com/consumer/en-UK/bedhead/" target="_blank">
								<figure class="image is-110x80">
									{{ Html::image('images/footer/bedhead.png', 'Bedhead - Proffessional Hairdressing') }}
								</figure>
							</a>
						</div>
						<div class="column">
							<a href="http://www.catwalkbytigi.com" target="_blank">
								<figure class="image is-110x80">
									{{ Html::image('images/footer/catwalk.png', 'Tigi Catwalk') }}
								</figure>
							</a>
						</div>
						<div class="column">
							<a href="http://www.tigihaircare.com/consumer/en-UK/b4men/default.asp" target="_blank">
								<figure class="image is-110x80">
									{{ Html::image('images/footer/bformen.png', 'B for Men - mens products for hairdressers') }}
								</figure>
							</a>
						</div>
						<div class="column">
							<a href="http://www.ghdhair.com/" target="_blank">
								<figure class="image is-110x80">
									{{ Html::image('images/footer/ghd.png', 'ghd - for hairdressers') }}
								</figure>
							</a>
						</div>
						<div class="column">
							<a href="http://www.tigihaircare.com/consumer/en-UK/sfactor/default.asp" target="_blank">
								<figure class="image is-110x80">
									{{ Html::image('images/footer/sfactor.png', 'S Factor - quality brand for hairdressers') }}
								</figure>
							</a>
						</div>
					</div>
				
					<div class="section social columns is-mobile">
						<div class="column">
							<a href="https://www.facebook.com/PaulKempHairdressing" target="_blank">
								
									<img src="{{ asset('images/footer/social/facebook.png') }}">
								
							</a>
						</div>
						<div class="column">
							<a href="https://www.instagram.com/paulkemphairdressing1" target="_blank">
								
									<img src="{{ asset('images/footer/social/instagram.png') }}">
								
							</a>
						</div>
						<div class="column">
							<a href="https://twitter.com/paulkemphair" target="_blank">
								
									<img src="{{ asset('images/footer/social/twitter.png') }}">
								
							</a>
						</div>
						<div class="column">
							<a href="https://www.pinterest.co.uk/PKHairdressing/" target="_blank">
								
									<img src="{{ asset('images/footer/social/pinterest.png') }}">
								
							</a>
						</div>
					</div>
			
			
			</footer>
		</div>
	</div>
</body>

</html>