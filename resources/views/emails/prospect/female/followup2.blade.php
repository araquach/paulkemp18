{{-- New prospect female 2 --}}

@extends('emails.prospect.template.minimal')


@section('background_colour')
    #dce1e9
@stop

@section('optional')
    
@stop
    
<!--Image 1200px x 400px-->
@section('hero_image')
   http://0f8f6b9addcd2082b20a-a5dcc640caa66d050a2badccb70574e9.r41.cf5.rackcdn.com/email_header_1.jpg
@stop

@section('section1')
    <span style="font-size: 20px;">Hi @if(App::isLocal())
                                        Adam, 
                                    @else 
                                        {{ $prospect->first_name }}, 
                                    @endif</span>
    <br><br>
    <br><span style ="font-size: 20px; line-height: 30px;">Just to let you know, your products have been sent in the post to you. They should be with you soon!</span><br>
    <strong></strong>
    <br>
    We've included a voucher for a  <strong>FREE Blow-dry and  @if(App::isLocal())
                                        {{ getTreatment('fine', 'dry') }}
                                    @else 
                                        {!! getTreatment($cut_spend, $colour_spend) !!}
                                    @endif 
    treatment</strong> that you can take advantage of over the coming months. 
    <br><br>
    Just call <strong>01925 242960</strong> to book in.
@stop

@section('section2')
    <strong>We look forward to seeing you soon in the salon soon.</strong>
@stop

@section('footer_colour')
    color: #999999;" bgcolor="#3f4960
@stop

