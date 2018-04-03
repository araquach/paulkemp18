@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Paul Kemp Hairdressing Stylist Prices - choose from stylist or senior stylist level. Our Stylists are all highly skilled and qualified.',
	'keywords' => 'stylist pricing, senior stylist pricing, stylist cost, senior stylist cost',
	'ogtitle' => 'Stylist Prices',
	'ogdescription' => 'Choose from a Stylist or Senior Stylist - Our Stylists are all highly skilled and qualified',
	'title' => 'Paul Kemp Hairdressing - Stylist Prices - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section class="price_page">
<h2>Prices</h2>

<ul id="price_links">
	<li>{{ Html::link('prices', "Stylist/Senior Prices") }}</li>
	<li>{{ Html::link('apprenticeprices', "Graduate/Trainee Prices") }}</li>
</ul>

<div id="price_link">
{{ Html::link('apprenticeprices', "Graduate/Trainee Prices") }}
</div>

<div class="price_panel">
<h3 class="level">Stylist/Senior Stylists</h3>

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
<tr>
<th class="firstcolumn"><h3>Colour, Cut &amp; Style</h3></th>
<th><h4 class="experience">Director</h4></th>
<th><h4 class="experience">Senior Stylists</h4></th>
<th><h4 class="experience">Stylists</h4></th>
</tr>
<tr>
<td class="number1"></td>
<td>&pound;105.95</td>
<td>&pound;96.05</td>
<td>&pound;81.85</td>
</tr>
<tr>
<td class="number2"></td>
<td>&pound;124.45</td>
<td>&pound;113.55</td>
<td>&pound;96.05</td>
</tr>
<tr>
<td class="number3"></td>
<td>&pound;143.00</td>
<td>&pound;130.95</td>
<td>&pound;110.25</td>
</tr>
<tr>
<th><h3>Colour &amp; Blowdry</h3></th>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
</tr>
<tr>
<td class="number1"></td>
<td>&pound;86.20</td>
<td>&pound;79.65</td>
<td>&pound;67.65</td>
</tr>
<tr>
<td class="number2"></td>
<td>&pound;105.90</td>
<td>&pound;93.90</td>
<td>&pound;81.90</td>
</tr>
<tr>
<td class="number3"></td>
<td>&pound;124.45</td>
<td>&pound;113.50</td>
<td>&pound;96.05</td>
</tr>
</table>

    <section id="corrective">
    <h4>Corrective Colour</h4>
    <p>If you've had a home hair colouring disaster, or a bad colour experience in another salon, we will correct &amp; transform your hair to how you wanted it in the first place! Our expert colour team will give you a price on consultation.</p>
    </section>

<table class="priceTable">
<tr>
<th>&nbsp;</th>
<th><h4 class="experience">Director</h4></th>
<th><h4 class="experience">Senior Stylists</h4></th>
<th><h4 class="experience">Stylists</h4></th>
</tr>
<tr>
<td class="firstcolumn"><h4>Cut, Dry &amp; Style</h4></td>
<td>&pound;56.73
</td>
<td>&pound;51.25<br></td>
<td>&pound;42.54<br></td>
</tr>
<tr>
<td><h4>Blow Dry</h4></td>
<td>&pound;38.60</td>
<td>&pound;34.90</td>
<td>&pound;28.35</td>
</tr>
<tr>
<td><h4>Curly Blow Dry</h4></td>
<td>&pound;45.80</td>
<td>&pound;42.55</td>
<td>&pound;35.95</td>
</tr>
</table>

<table class="priceTable">
<tr>
<td class="firstcolumn"><h4>Mens Cut &amp; Style</h4></td>
<td>&pound;35.20</td>
<td>&pound;32.20</td>
<td>&pound;25.65</td>
</tr>
<tr>
<td><h4>Hair Extensions</h4></td>
<td>from &pound;380</td>
<td>(Remi)</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>from &pound;590</td>
<td>(Russian)</td>
<td>&nbsp;</td>
</tr>
</table>

</div> <!--end price_panel-->

<section id="skintest">
<h4>Skin Test Policy</h4>
<p>New clients require a skin test 48 hours prior to any colour service. It's a simple procedure that only takes a minute or two. Please mention when booking your appointment</p>
</section>


</section>
<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/prices.js') }}"></script>

@stop