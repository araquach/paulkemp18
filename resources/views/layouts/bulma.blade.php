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
  <section class="section">
    <div class="container">
      <h1 class="title">
        Hello World
      </h1>
      <p class="subtitle">
        My first website with <strong>Bulma</strong>!
      </p>
      <div class="columns">
        <div class="column news">
          col 1
        </div>
        <div class="column news">
          col 2
        </div>
        <div class="column news">
          col 3
        </div>
        <div class="column news">
          col 4
        </div>
        <div class="column news">
          col 5
        </div>
      </div>
    </div>
  </section>
  </body>
</html>