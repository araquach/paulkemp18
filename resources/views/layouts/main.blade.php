<!DOCTYPE HTML>
<html>

@section('head')

@show

	<body>
		<div id="main">
			<div class="main container">
				<header class="hero is-primary is-bold">
					<div class="hero-body">
						<nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
							<div class="navbar-brand">
								<a class="navbar-item" href="{{ URL::to('/') }}">
									<img src="{{ asset('images/logos/pk_logo_white.png') }}">
								</a>

								<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
									<span aria-hidden="true"></span>
									<span aria-hidden="true"></span>
									<span aria-hidden="true"></span>
								</a>
							</div>

							<div id="navbarBasicExample" class="navbar-menu">
								<div class="navbar-start">
									<a class="navbar-item is-size-4-mobile" href="{!! URL::to('/') !!}">
										Home
									</a>

									<a class="navbar-item is-size-4-mobile" href="{!! URL::to('salon') !!}">
										Salon
									</a>

									<a class="navbar-item is-size-4-mobile" href="{!! URL::to('team') !!}">
										Team
									</a>
									<a class="navbar-item is-size-4-mobile" href="{!! URL::to('offers') !!}">
										Offers
									</a>

									<div class="navbar-item has-dropdown is-hoverable">
										<a class="navbar-link is-hidden-mobile">
											More
										</a>

										<div class="navbar-dropdown">
											<a class="navbar-item is-size-4-mobile" href="{!! URL::to('blog') !!}">
												Blog
											</a>
											<a class="navbar-item is-size-4-mobile" href="{!! URL::to('recruitment') !!}">
												Recruitment
											</a>
											<a class="navbar-item is-size-4-mobile" href="{!! URL::to('men') !!}">
												Men
											</a>
											<a class="navbar-item is-size-4-mobile" href="{!! URL::to('reviews') !!}">
												Reviews
											</a>
										</div>
									</div>
								</div>

								<div class="navbar-end">
									<div class="navbar-item">
										<div class="buttons">
											<a class="button is-primary" href="{!! URL::to('contact') !!}">
												<strong>Contact Us</strong>
											</a>
											<a class="button is-light" href="{!! URL::to('bookings') !!}">
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
						<div class="social columns is-mobile">
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
						<p class="is-size-7 has-text-centered">Find us in the directory of <a href='http://www.warrington.co.uk/hairdressers/' class="directory-link">Warrington Hairdressers</a></p>
					</footer>
				</div>
			</div>
	</body>
</html>
