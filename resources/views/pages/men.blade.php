@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'At Paul Kemp Hairdressing we have a team of experts in men\'s hairdressing on hand. Whatever your fashion tastes and style, we\'ll work your hair exactly how you want it. The team constantly stay up to date with latest cutting & styling techniques through Tigi and Schwarzkopf\'s innovative training courses and inspiration sessions.',
	'keywords' => 'mens hairdressing, male hairdressing, male grooming, mens cutting, mens colouring, mens styling',
	'ogtitle' => 'Men\'s Hairdressing',
	'ogdescription' => 'At Paul Kemp Hairdressing we have a team of experts in men\'s hairdressing on hand. Whatever your fashion tastes and style, we\'ll work your hair exactly how you want it. The team constantly stay up to date with latest cutting & styling techniques through Tigi and Schwarzkopf\'s innovative training courses and inspiration sessions.',
	'ogimage' => url('/') . '/images/ogimage/men.jpg',
	'title' => 'Paul Kemp Hairdressing - Men\'s Hairdressing - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="mens">
  <section id="mensinfo">
    <h2>Men's Hairdressing</h2>
    <p>At Paul Kemp Hairdressing we have a team of experts in men's hairdressing on hand. Whatever your fashion tastes and style, we'll work your hair exactly how you want it.</p>
    <p>The team constantly stay up to date with latest cutting &amp; styling techniques through Tigi and Schwarzkopf's innovative training courses and inspiration sessions.</p>
    <p>Call us to book in with one of our male hair experts, or drop into the salon for a free consultation.</p>
    <p class="offer">Prices start from around &pound;20 for a Wash, Cut &amp; Style</p>
    
    
    </section>
    <div id="mensimages">
    {{ Html::image('images/men/men1.jpg') }}
    {{ Html::image('images/men/men2.jpg') }}
    {{ Html::image('images/men/men3.jpg') }}
    {{ Html::image('images/men/men4.jpg') }}   
    </div>
</section>

@stop