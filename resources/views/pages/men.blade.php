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

<div id="men">
    <section class="hero is-large men-image">
        <div class="hero-body">
        </div>
    </section>
    
    <div class="section tile is-ancestor">
        <div class="tile is-parent is-5">
            <div class="tile is-child">
                <h2 class="title 2 has-text-primary">Men's Hairdressing</h2>
                <p>At <strong>Paul Kemp Hairdressing</strong> we have a team of experts in men's hairdressing on hand. Whatever your fashion tastes and style, we'll work your hair exactly how you want it.</p>
                <p>The team constantly stay up to date with latest cutting &amp; styling techniques through Tigi and Schwarzkopf's innovative training courses and inspiration sessions.</p>
                <p>Call us to book in with one of our male hair experts, or drop into the salon for a free consultation.</p>
                <p class="offer">Prices start from around &pound;20 for a Wash, Cut &amp; Style</p>
            </div>
        </div>
        <div class="tile is-parent is-vertical">
           <div class="tile is-child">
                <figure class="image is-240x270">
                    {{ Html::image('images/men/men1.jpg') }}
                </figure>
            </div>
            <div class="tile is-child">
                <figure class="image is-240x270">
                    {{ Html::image('images/men/men2.jpg') }}
                </figure>
            </div>
        </div>
        <div class="tile is-parent is-vertical">
            <div class="tile is-child">
                <figure class="image is-240x270">
                    {{ Html::image('images/men/men3.jpg') }}
                <figure class="image is-240x160">
            </div>
            <div class="tile is-child">
                <figure class="image is-240x270">
                    {{ Html::image('images/men/men4.jpg') }}
                </figure>
            </div>
        </div>
    </div>
</div>

@stop