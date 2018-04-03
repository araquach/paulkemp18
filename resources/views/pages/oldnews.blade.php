@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'All the archived news from the Paul Kemp Hairdressing Team',
	'keywords' => 'Paul Kemp Hairdressing news, PK news stories, archived news, news archives',
	'ogtitle' => 'PK News Archives',
	'ogdescription' => 'All the archived news from the Paul Kemp Hairdressing Team',
	'title' => 'Paul Kemp Hairdressing - PK News Archives - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<script type="text/javascript">
window.addEvent('domready', function(){
	  new Fx.Accordion($('accordion'), '#accordion .reveal', '#accordion .hidden')
	  
	  });
</script>

<section id="newspage">
<h2>News</h2>

<section id="accordion">

<article class="article">
<a id="FibreForce" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/fibre_force3.jpg', 'Fibre Force') }}
<h3>New BC Fibre Force</h3>
<p>We've all been guilty of mistreating our hair from time to time, whether it's through over straightening, over colouring or just using poor quality products. Hair is tough, but you do have to treat it right if you want it to behave itself!</p>
<p>Schwarzkopf realised there are a lot of people out there not giving their hair the love and care it needs, so they introduced BC Fibre Force - a complete range of products designed to return your hair to it's former glory over a fairly short period of time.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/fibre_force2.jpg', 'Fibre Force') }}
<p>Here's what Schwarzkopf say:</p>
<p><em>BC Fibre Force introduces a new dimension of hair repair returning even most eroded hair to its optimal level of force and resilience.</em></p>
<p><iframe src="http://player.vimeo.com/video/56987102" width="400" height="300" class="right" allowFullScreen></iframe></p>
<p><em>For the first time the formulas with Micronized Hair-Identical Keratins penetrate deeply into the hair architecture to re-cement specifically the Cell-Membrane-Complex, the intercellular bonding cement responsible for strong and resilient hair fibre.</em></p>
<p>Which in English means that it's going to make the most damaged hair feel loads healthier!</p>
<p><strong>The complete range is as follows:</strong></p>
{{ Html::image('images/news_images/fibre_force.jpg', 'Fibre Force') }}

	<p><strong>BC Fibre Force Shampoo</strong></p>
	<p><strong>BC Fibre Force Spray Conditioner</strong></p>
	<p><strong>BC Fibre Force Rinse Out Conditioner</strong></p>
	<p><strong>BC Fibre Force Fortifier Treatment</strong></p>
	<p><strong>BC Fibre Force Keratin Infusion</strong></p>

<p>Find out more at the Schwarzkopf site: <br> <a href="http://www.schwarzkopf-professional.co.uk/index.php?id=22120" target="_blank">www.schwarzkopf-professional.co.uk/fibreforce</a></p>
</section> <!--end .hidden-->
<p class="author">Published by PK</p>
<time datetime="2013-04-26">26<sup>th</sup> April 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="namedAnchor" class="anchor"></a>
<section class="visible">
{{ Html::image('images/news_images/merry-christmas.jpg', 'Merry Christmas!') }}
<h3>Christmas Bookings</h3>
<p>We're anticipating a seriously busy Christmas period this year, we started taking bookings back in September! The salon is open longer hours throughout December, with Sunday/Monday opening in the two weeks before Christmas.</p>
<p>We highly recommend getting your appointment booked soon to avoid disappointment - some of the weekends are already nearly booked up!</p>
<p class="offer"><strong>Call 01925 444488 to book yours now.</strong></p>
</section> <!--end .visible-->
<p class="author">Published by PK</p>
<time datetime="2012-11-30">1<sup>st</sup> November 2012</time>
</article> <!--end #article-->

<article class="article">
<section class="visible">
<a name="anniversary" class="anchor"></a>
{{ Html::image('images/news_images/balloons.jpg', 'Celebrate') }}
<h3>Celebrating A Successful First Year</h3>
<p>This month at Paul Kemp Hairdressing we're celebrating our first Anniversary - It's hard to believe it's a year since we opened! It's been an amazing first year with the salon growing from strength to strength.</p> 
<p>The whole team have been on board from day one, striving to offer the best service and standards. Paul Kemp Hairdressing is proving to be a fantastic success - many thanks to the team and all the clients who have been to the salon - we couldn't do it without you!</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p>Throughout the month we're running competitions and features tied to our first year anniversary. Keep checking back so you don't miss out. 
Plus if you've visited the salon you automatically get the chance to win a fantastic prize!! We're rewarding top recommenders, big spenders, and the people who just can't stay away!</p>
<p>We're also running a competition open to everyone with more amazing prizes!! Check back soon to enter!</p>
<p class="offer"><strong>Thanks once again to everyone - here's to an even more amazing second year at Paul Kemp Hairdressing!</strong></p>
</section> <!--end .hidden-->
<time datetime="2012-07-03" pubdate="pubdate"><p>3rd July 2012</p></time>
</article> <!--end #article-->

<article class="article">
<section class="visible">
<a name="Tash" class="anchor"></a>
{{ Html::image('images/news_images/tash.jpg', 'Tash Bailey') }}
<h3>She's Ready for the Floor</h3>
<p>It's great when an apprentice works their way through their years of training and finally gets to the point where all the hard work comes into fruition. Natasha Bailey has reached that point and is just a few months off being promoted into her Junior Stylist role. </p>
<p>Natasha said <em>&quot;I can't wait to be running a busy column, I love hairdressing and even though the training is hard work, it's really exciting to be so close to becoming a stylist&quot;</em></p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p>Tash is now looking to build on her skills by opening up her column and taking bookings throughout the week. If you're looking for a new style at a fantastic price then take advantage of this great offer:</p>
<p class="offerHeading">Special Introductory offer</p>
<p class="offer">Colour and Cut <br>
  with Natasha for just &pound;25!</p>
<p class="offerSmall">On first visit to salon - not with any other offer<br>
  until 29th June 2012<br>
  Skin test to be carried out 48 hrs prior to any colour service</p>
</section> <!--end .hidden-->
<time datetime="2012-05-29" pubdate="pubdate"><p>29th May 2012</p></time>
</article> <!--end #article-->

<article class="article">
<section class="visible">
<a name="LeonKate" class="anchor"></a>
{{ Html::image('images/news_images/leon.jpg', 'Leon Pritchard') }}
<h3>New Team members join the salon</h3>
<p>The Paul Kemp team continues to grow (in both talent and numbers) with the recent introduction of Leon Pritchard and Kate O'halleran.</p>
<p>Both stylists bring a new mix of skills to the team.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/kate.jpg', 'Kate O\'halloran') }}
<p>Leon is 21 and joins us from Daniel Anderson Hairdressing (which recently merged into Jakata/Paul Kemp Hairdressing). He's still in the early stages of his career but is building a client base fast. He's already a big hit with the clients and has settled into the team (it's like he's been with us since day 1!)</p>
<p>Kate was formerly a stylist at sister salon Jakata - she decided she wanted a change of scenery and has relocated over here. She has loads of experience and a large regular client base. It's great to have her on board.</p>
<p><em>Look out for special offers with Leon over the coming months!</em>
</section> <!--end .hidden-->
<time datetime="2012-04-25" pubdate="pubdate"><p>25th April 2012</p></time>
</article> <!--end #article-->

<article class="article">
<section class="visible">
<a name="NewKebelo" class="anchor"></a>
{{ Html::image('images/news_images/kebelo.jpg', 'Kebelo') }}
<h3>The Award Winning Kebelo System just got better!</h3>
<p>We launched the <em>Kebelo System</em> in the salon a good few months ago</p>
<p>We've grown to absolutely love it. The smoothing and de-frizzing results have been great every time. The obvious downsides to the treatment was the time it took to do (about 3 1/2 - 4 hours!) which in turn meant it came with a high price (close to &pound;200) although everyone who's had it still said was worth every penny.</p>
<p><strong>Things changed earlier this month with a reformulated version of the product was launched.....</strong></p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/news_images/kebelo_blonde.jpg', 'Kebelo') }}
<p><iframe width="380" height="230" src="http://www.youtube.com/embed/FYPvkP2cois" frameborder="0" allowfullscreen class="right"></iframe></p>
<p>The new version has a reduced application time (down to 1 hour) whilst still promising to produce the same results as it's predecessor - almost hard to believe but I can safely say it's 100% true! (I've had both versions done on my hair!)</p>
<p>This is fantastic news as it means we've been able to reduce the treatment price down to <strong>just &pound;99!</strong> (this still includes the take home aftercare pack worth &pound;40) plus you can use that extra time (and money) doing something more productive (like shopping!)</p> 
<p><em>So there are absolutely no downsides now to the Kebelo Treatment.</em></p>
<p><strong>Plus for a limited time we're offering a FREE Cut, Dry and Style with every treatment!</strong></p>
<p><a href="http://www.kebelo.com/">Visit the Kebelo site for more information<a></p>
</section> <!--end .hidden-->
<time datetime="2012-04-13" pubdate="pubdate"><p>13th April 2012</p></time>
</article> <!--end #article-->

<article class="article">
<section class="visible">
<a name="candy_fixations" class="anchor"></a>
{{ Html::image('images/news_images/Candy-Fixations.jpg', 'Candy Fixations') }}
<h3>NEW Bedhead 'Candy Fixations'</h3>
<h4>begging to be whipped, teased, scrunched and smelt</h4>
<p>Tigi have taken inspiration from the world of sweets and created an incredible texture range to deliver volume, flexible hold, definition and root lift. Sugar was originally used in the punk era to keep the mohawks standing upright and this new range is all about the ultimate texture.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p>There are five products in Candy Fixations range: Mega Whip, Glaze Haze, Totally Baked, Sugar Shock and Sugar Dust.</p>

{{ Html::image('images/news_images/megawhip.jpg', 'Mega Whip') }}
{{ Html::image('images/news_images/glaze_haze.jpg', 'Glaze Haze') }}
{{ Html::image('images/news_images/totally-baked.jpg', 'Totally Baked') }}
{{ Html::image('images/news_images/sugarshock.jpg', 'Sugar Shock') }}
{{ Html::image('images/news_images/sugar-dust.jpg', 'Sugar Dust') }}

<ul>
	<li><h5>Mega Whip</h5><p>whips into dry hair for light texture with a flexible hold for shorter styles, or use throughout longer layers for a piecey style definition.</p></li>
	<li><h5>Glaze Haze</h5><p>a sweet treat that candy-coats each strand to fight humidity, adds shine and helps speed up drying time.</p></li>
	<li><h5>Totally Baked</h5><p>Prep your blow-dry with TIGI Bed Head Candy Fixations Totally Baked, a tasty hair meringue, for long-lasting boost of hold, volume and texture.</p></li>
	<li><h5>Sugar Shock</h5><p>Sweet waves, shocking body! Mist TIGI Bed Head Candy Fixations Sugar Shock into hair for a tousled look, or later throughout for extreme texture, fullness and hold.</p></li>
	<li><h5>Sugar Dust</h5><p>a quick fix for your style addiction. Sprinkle into roots to absorb oil and tease for instant volume, or sprinkle throughout layers for texture with staying power.</p></li>
</ul>

<p>Check out this promo video for the range</p>
<iframe width="380" height="230" src="http://www.youtube.com/embed/4YSxuWloiqw" frameborder="0" allowfullscreen class></iframe>
<p><strong>All product in the range are just &pound;9.50 for a limited time</strong></p>
</section> <!--end .hidden-->
<time datetime="2012-03-18" pubdate="pubdate"><p>18th March 2012</p></time>
</article> <!--end #article-->

</section> <!--end #accoordion-->
<p class="newslink">{{ Html::link('news', "Click here for the latest news stories&hellip;") }}</p>
</section>

@stop