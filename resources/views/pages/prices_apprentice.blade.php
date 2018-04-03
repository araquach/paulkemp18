@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Paul Kemp Hairdressing Apprentice Prices - Our apprentices are trained to the highest standards and are observd by senior stylists. If you\'re looking for a more affordable option then book in with one of our talented apprentices',
	'keywords' => 'apprentice price, junior stylist price, graduate stylist price',
	'ogtitle' => 'Apprentice Prices',
	'ogdescription' => 'Our apprentices are trained to the highest standards and are observd by senior stylists. If you\'re looking for a more affordable option then book in with one of our talented apprentices',
	'title' => 'Paul Kemp Hairdressing - Apprentice Prices - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section class="price_page">
<h2>Prices</h2>

<div id="price_link">
{{ Html::link('prices', "Stylist Prices") }}
</div>

<div class="price_panel">
<h3 class="level">Graduate/Junior Stylists</h3>

<table class="key">
<td class="number1"></td>
<td>Root touch up, top/parting foils or full head colour (short), colour gloss</td>
</tr>
<tr>
<td class="number2"></td>
<td>Roots &amp; Refresh, full head colour (mid length), creative colouring, light to dark</td>
</tr>
<tr>
<td class="number3"></td>
<td>Full head foils, technical creative colour, full head colour (long), dark to light</td>
</tr>
</table>

<table class="priceTable">
<tr border="1">
<th class="firstcolumn"><h3>Colour, Cut &amp; Style</h3></th>
<th><h4 class="experience">Graduate Stylist</h4></th>
<th><h4 class="experience">Junior Stylist</h4></th>
<th><h4 class="experience">Junior</h4></th>
</tr>
<tr>
<td class="number1"></td>
<td>&pound;65.45<br></td>
<td>&pound;49.10<br></td>
<td>&pound;29.95<br></td>
</tr>
<tr>
<td class="number2"></td>
<td>&pound;76.40</td>
<td>&pound;56.75</td>
<td>&pound;33.95</td>
</tr>
<tr>
<td class="number3"></td>
<td>&pound;87.30</td>
<td>&pound;64.40</td>
<td>&pound;37.95</td>
</tr>
<tr>
<th><h3>Colour &amp; Blowdry</h3></th>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
</tr>
<tr>
<td class="number1"></td>
<td>&pound;54.55</td>
<td>&pound;41.45</td>
<td>&pound;25.95</td>
</tr>
<tr>
<td class="number2"></td>
<td>&pound;65.50</td>
<td>&pound;49.10</td>
<td>&pound;29.95</td>
</tr>
<tr>
<td class="number3"></td>
<td>&pound;76.40</td>
<td>&pound;56.75</td>
<td>&pound;33.95</td>
</tr>
</table>

<section id="corrective">
    <h4>Corrective Colour</h4>
    <p>If you've had a home hair colouring disaster, or a bad colour experience in another salon, we will correct &amp; transform your hair to how you wanted it in the first place! Our expert colour team will give you a price on consultation.</p>
</section>

<table class="priceTable">
<th><h3></h3></th>
<th><h4 class="experience">Graduate Stylist</h4></th>
<th><h4 class="experience">Junior Stylist</h4></th>
<th><h4 class="experience">Junior</h4></th>
<tr>
<td class="firstcolumn"><h4>Cut, Dry &amp; Style</h4></td>
<td>&pound;32.70</td>
<td>&pound;22.90</td>
<td>&pound;13.95</td>
</tr>
<tr>
<td><h4>Blow Dry</h4></td>
<td>&pound;21.80</td>
<td>&pound;15.25</td>
<td>&pound;9.95</td>
</tr>
<tr>
<td><h4>Curly Blow Dry</h4></td>
<td>&pound;29.45</td>
<td>&pound;20.70</td>
<td>&pound;14.95</td>
</tr>
<tr>
<td><h4>Mens Cut &amp; Style</h4></td>
<td>&pound;19.10</td>
<td>&pound;13.05</td>
<td>&pound;7.95</td>
</tr>
</table>
</div> <!--price_panel-->

<section id="skintest">
<h4>Skin Test Policy</h4>
<p>New clients require a skin test 48 hours prior to any colour service. It's a simple procedure that only takes a minute or two. Please mention when booking your appointment</p>
</section> <!--skintest-->
</section> <!--price_page-->

@stop