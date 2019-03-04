@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
    'description' => 'With a prime position right on the corner of Sankey Street and Springfield street the salon premises is an early 1900\'s building that was once home to the Picturedrome and Cameo cinemas! It\'s taken on many guises since, but when we got hold of it we knew we wanted it to be the warmest, friendliest most relaxing salon in the area.',
    'keywords' => 'Paul Kemp Hairdressing, salon, premises, springfield street, sankey street, town centre',
    'ogtitle' => 'The Salon',
    'ogdescription' => 'With a prime position right on the corner of Sankey Street and Springfield street the salon premises is an early 1900\'s building that was once home to the Picturedrome and Cameo cinemas! It\'s taken on many guises since, but when we got hold of it we knew we wanted it to be the warmest, friendliest most relaxing salon in the area.',
    'ogimage' => url('/') . '/images/ogimage/salon.jpg',
    'title' => 'Paul Kemp Hairdressing - The Salon - Hairdressers in Warrington'
    ])
    
@stop

@section('content')

<div id="salon">
    <section class="hero is-large salon-image">
        <div class="hero-body">
        </div>
    </section>
    
    <div class="section tile is-ancestor">
      <div class="tile is-parent is-5">
        <div class="tile is-child">
            <h2 class="title 2 has-text-primary">The Salon</h2>
            <p>With a prime position right on the corner of <em>Sankey Street</em> and <em>Springfield street</em> the salon premises is an early 1900's building that was once home to the Picturedrome and Cameo cinemas! It's taken on many guises since, but when we got hold of it we knew we wanted it to be the warmest, friendliest most relaxing salon in the area.</p>
            <p>The salon was designed to create the ultimate in relaxing environments. With cosy, defined areas, you never feel too exposed, but its still open enough to soak up the vibrant, sociable atmosphere. The warm, friendly staff are always on hand to make you feel at home. Enjoy a cappuccino, latte or a glass of wine whilst you are being pampered.</p>
            <p>If you're traveling to us by car, there are loads of car park facilities nearby. By train or bus, its only a short walk from both train stations and the bus terminal. </p>
            {!! link_to('contact', 'Map and more info here', ['class' => 'button is-primary']) !!}
        </div>
      </div>
      <div class="tile is-parent is-vertical">
        <div class="tile is-child">
            <figure class="image is-240x160">
                <img class="image" src="{{ asset('images/salon/salon_shot_1.jpg') }}">
            </figure>
        </div>
        <div class="tile is-child">
            <figure class="image is-240x160">
                <img class="image" src="{{ asset('images/salon/salon_shot_2.jpg') }}">
            </figure>
        </div>
        <div class="tile is-child">
            <figure class="image is-240x160">
                <img class="image" src="{{ asset('images/salon/salon_shot_3.jpg') }}">
            </figure>
        </div>
      </div>
      <div class="tile is-parent is-vertical">
        <div class="tile is-child">
            <figure class="image is-240x160">
                <img class="image" src="{{ asset('images/salon/salon_shot_4.jpg') }}">
            </figure>
        </div>
        <div class="tile is-child">
            <figure class="image is-240x160">
                <img class="image" src="{{ asset('images/salon/salon_shot_5.jpg') }}">
            </figure>
        </div>
        <div class="tile is-child">
            <figure class="image is-240x160">
                <img class="image" src="{{ asset('images/salon/salon_shot_6.jpg') }}">
            </figure>
        </div>

      </div>
    </div>


</div>

@stop