<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Paul Kemp Hairdressing') }}</title>

	<!-- Fonts -->

	<!-- Styles -->
	<link href="{{ mix('/css/app.css') }}" rel="stylesheet">

	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
</head>