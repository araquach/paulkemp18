{{-- New Prospect Male 2 --}}

@extends('emails.prospect.template.minimal')

@section('background_colour')
    #333333
@stop

@section('optional')
    
@stop
    
<!--Image 1200px x 400px-->
@section('hero_image')
   http://0f8f6b9addcd2082b20a-a5dcc640caa66d050a2badccb70574e9.r41.cf5.rackcdn.com/email_header_man_1.jpg
@stop

@section('section1')
    <span style="font-size: 20px;">Hi @if(App::isLocal())
                                        Adam, 
                                    @else 
                                        {{ $prospect->first_name }}, 
                                    @endif</span>
    <br><br>
    <span style ="font-size: 20px; line-height: 30px;">Just to let you know, your products have been sent in the post to you. They should be with you soon.</span>
@stop

@section('section2')
    We've included a voucher for <strong>50% off</strong> with either <strong> @if(App::isLocal())
                                        {!! getStylists(1, 2, 'F') !!}
                                    @else 
                                        {!! getStylists($cut_price, $colour_price, $gender) !!}
                                    @endif </strong> 
    that you can take advantage of over the coming months. 
    <br><br>
    Just call <strong>01925 444488</strong> to book in.
    <br><br>
    <strong>We look forward to seeing you soon in the salon soon.</strong>
    <br><br>
    <strong>The Paul Kemp Hairdressing salon Team</strong>
    
@stop

@section('footer_colour')
    color: #999999;" bgcolor="#666666
@stop







