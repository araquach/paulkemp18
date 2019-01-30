@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Kate is no longer at PK',
	'ogtitle' => 'Kate is no longer at PK',
	'ogdescription' => 'We\'re sorry to inform you that Kate no longer at PK. She has decided it was time to move on',
	'ogimage' => url('/') . '/images/ogimage/kate_meta.jpg',
	'title' => 'Paul Kemp Hairdressing -  Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="leaver">
	
	<section id="leavercopy">
	    
        <h2>Kate is no longer at PK</h2>
        <p><strong>We're sorry to inform you that <em>Kate</em> is no longer at PK. She has decided the time had come to try something new. She's been part of the team for many years so it's sad to see her go but we're sure she'll be happy in her new role.</strong></p>
        <p>If you were a regular client of Kate we apologise for her departure and we hope it won't cause you any inconvenience.</p>
        
        <p>As you know, we have a number of talented stylists that will be able to look after you! <em>Our new additions to the team could be a perfect choice!</em></p> 
        <p><strong>Brad</strong> joined us at the back end of the year and is at the same level as Kate and he's been producing some outstanding work! You've probably seen him in the salon. <a href="https://paulkemphairdressing.com/blog/introducing_brad" targe="_blank">Click here to find out more about him</a></p>

        <p><strong>Louise</strong> joined the team at the beginning of the year and has instantly settled in. She's got a huge amount of experience and is eager to build her client base. She's a Senior Stylist so her prices are a little more expensive than Kate's but you can guarantee she'll deliver! <a href="https://paulkemphairdressing.com/blog/introducing_sarah" targe="_blank">Click here to find out more about her</a></p>

        <p>We have all the other familiar faces in the salon who will happily look after you too. Just keep in mind that they are all seriously busy and you might struggle to get in with them. Feel free to take a look at our team page to see if there's a stylist that you'd like to try. <a href="https://paulkemphairdressing.com/team" target="_blank">Check out the full team here</a></p>
        
        <p><em>We sincerely hope we can continue to give you the same fantastic service as we really appreciate your loyalty to the salon. We have a great offer to help you transfer across to Brad or Sarah (or one of our other team members)&hellip;</em></p>
       
        <p class="offer">We'd like to offer you 30% off your next visit<br>and 15% off the following visit</p>
        <p>with Brad or Sarah</p>
        <p class="offer">or 15% off with any of our other stylists</p>
        
        <p>Just mention the offer when booking</p> <p class="small">(one offer per person, not transferable, ends 30/09/18)</p>
        
        <p><a href="{{ URL::to('booking') }}"" target="_blank">Book in with one of our stylists here ></a></p>
        
        <p><em>Pictured: Louise Bailey &amp; Abi Clarke</em></p>
    
    </section> <!--end leavercopy-->
    
    <section id="leaver-pic"></section>

</section> <!--end leaver-->

@stop