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

<section id="salon">
  <section id="saloninfo">
    <h2>The Salon</h2>
    <p>With a prime position right on the corner of <em>Sankey Street</em> and <em>Springfield street</em> the salon premises is an early 1900's building that was once home to the Picturedrome and Cameo cinemas! It's taken on many guises since, but when we got hold of it we knew we wanted it to be the warmest, friendliest most relaxing salon in the area.</p>
    <p>The salon was designed to create the ultimate in relaxing environments. With cosy, defined areas, you never feel too exposed, but its still open enough to soak up the vibrant, sociable atmosphere. The warm, friendly staff are always on hand to make you feel at home. Enjoy a cappuccino, latte or a glass of wine whilst you are being pampered.</p>
    <p>If you're traveling to us by car, there are loads of car park facilities nearby. By train or bus, its only a short walk from both train stations and the bus terminal. </p>
    {!! link_to('contact', 'Map and more info here &gt;') !!}
    </section>
    <div id="salonimages">
    {{ Html::image('images/salon/salon_shot_2.jpg', 'Salon Shot 1') }}
    {{ Html::image('images/salon/salon_shot_1.jpg', 'Salon Shot 2') }}
    {{ Html::image('images/salon/salon_shot_4.jpg', 'Salon Shot 3') }}
    {{ Html::image('images/salon/salon_shot_3.jpg', 'Salon Shot 4') }}
    {{ Html::image('images/salon/salon_shot_6.jpg', 'Salon Shot 5') }}
    {{ Html::image('images/salon/salon_shot_5.jpg', 'Salon Shot 6') }}
    </div>
</section>

@stop