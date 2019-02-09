<!DOCTYPE html>
<html>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
		<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">

				<!-- CSRF Token -->
				<meta name="csrf-token" content="{{ csrf_token() }}">

				<title>{{ config('app.name', 'Paul Kemp Hairdressing') }}</title>

				<!-- Fonts -->

				<!-- Styles -->
				<link href="{{ mix('/css/app.css') }}" rel="stylesheet">
		</head>

	<body>
		<section class="section main">
			<div class="container">
				<h1 class="title">
					Hello World
				</h1>
				<p class="subtitle">
					My first website with <strong>Bulma</strong>!
				</p>
				<div class="columns">
					<div class="column">
						<a href="#">
							<div class="card">
								<div class="card-image">
									<figure class="image is-3by4">
										<img src="https://bulma.io/images/placeholders/960x1280.png" alt="Placeholder image">
									</figure>
								</div>
								<div class="card-content">
									<div class="media">
										<div class="media-content">
											<p class="title is-4">News 1</p>
										</div>
									</div>

									<div class="content">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Phasellus nec iaculis mauris.
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="column">
						<a href="#">
							<div class="card">
								<div class="card-image">
									<figure class="image is-3by4">
										<img src="https://bulma.io/images/placeholders/960x1280.png" alt="Placeholder image">
									</figure>
								</div>
								<div class="card-content">
									<div class="media">
										<div class="media-content">
											<p class="title is-4">News 2</p>
										</div>
									</div>

									<div class="content">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Phasellus nec iaculis mauris.
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="column">
						<a href="#">
							<div class="card">
								<div class="card-image">
									<figure class="image is-3by4">
										<img src="https://bulma.io/images/placeholders/960x1280.png" alt="Placeholder image">
									</figure>
								</div>
								<div class="card-content">
									<div class="media">
										<div class="media-content">
											<p class="title is-4">News 3</p>
										</div>
									</div>
									<div class="content">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Phasellus nec iaculis mauris.
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="column">
						<a href="#">
							<div class="card">
								<div class="card-image">
									<figure class="image is-3by4">
										<img src="https://bulma.io/images/placeholders/960x1280.png" alt="Placeholder image">
									</figure>
								</div>
								<div class="card-content">
									<div class="media">
										<div class="media-content">
											<p class="title is-4">News 4</p>
										</div>
									</div>
									<div class="content">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Phasellus nec iaculis mauris.
									</div>
								</div>
							</div>
						</a>
					</div>
					
				</div>

			</div>
		</section>
	</body>
</html>