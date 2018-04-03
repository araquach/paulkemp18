<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Paul Kemp Hairdressing is a luxurious hair salon right in the heart of Warrington town centre. Sister salon to the award winning Jakata Hair and Beauty team, the stunning new hairdressers opened back in June 2011 with the aim to offer an ultra relaxing atmosphere, first class customer service, alongside the highest level of hairdressing expertise. The salons talented hairdressers are all trained to the highest level in cutting, colouring and styling hair, with specialists in technical colour, hair straightening, wedding hair and hair extensions. The team has a wealth of experience in all aspects of hairdressing by highly qualified hairdressers.">
	<meta name="keywords" content="Paul Kemp Hairdressing, hairdressers, hairdressing, hair salons Warrington, salon, salons, salon Warrington, salons warrington, hairdressing jobs warrington, fashion colour, mens hairdressing, brazilian blowdry, Warrington, Lymm, Stockton Heath, Culcheth, Great Sankey, Widnes and Runcorn">
	<meta name="author" content="Paul Kemp Hairdressing Ltd">
	<meta name="viewport" content="width=device-width" /> <!--mobile fixed width-->
	
	<meta property="og:title" content="{{ $ogtitle or 'Paul Kemp Hairdressing' }}">
    <meta property="og:description" content="{{ $ogdescription or 'Paul Kemp Hairdressing is a luxurious hair salon right in the heart of Warrington town centre' }}">
	<meta property="og:image" content="{{ $ogimage or url('/') . '/images/ogimage/home.jpg' }}">
	<meta property="og:url" content="{{ url()->current() }}">
	
	<!-- Pintrest -->
	<meta name="p:domain_verify" content="847aad26875d4681b6b0d5074f5e9deb"/>
	
	
	<!--Google analytics -->
	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-2487518-1', 'auto');
  		ga('send', 'pageview');
	</script>
	
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '1876118849307800'); // Insert your pixel ID here.
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=1876118849307800&ev=PageView&noscript=1"
	/></noscript>
	<!-- DO NOT MODIFY -->
	<!-- End Facebook Pixel Code -->

	

	<link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}" />
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 640px), only screen and (min-device-width : 719px) and (max-device-width : 721px) and (-webkit-min-device-pixel-ratio : 2) and (orientation : portrait)" href="{{ elixir('css/mob.css') }}"
	/>
	
	{{-- Phorest online booking styling --}}
	<style>
      .iframe-container {
        position: relative;
        height: 800px;
        overflow: hidden;
      }
      .iframe-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }
    </style>
	
	<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/mootools.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/modernizr.js') }}"></script>

	<title>{{ $title or 'Paul Kemp Hairdressingg - Hairdressers in Warrington' }}</title>

</head>