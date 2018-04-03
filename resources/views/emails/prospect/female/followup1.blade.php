{{-- New prospect female 1 --}}

@extends('emails.prospect.template.large_2image')

@section('background_colour')
    #dce1e9
@stop

@section('optional')
    
@stop
    
<!--Image 600px x 300px-->
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
    <strong>Thanks for applying for your FREE products</strong>
    <br><br>
    we've selected a range that's ideal for your hair texture and condition. We'll let you know when they're on the way to you.
@stop

<!--Image 200px wide-->
@section('image_left')
    http://2183bb2632b00d8aa0b3-40e51394fe766397114262205a4ab22d.r37.cf5.rackcdn.com/female_pic.jpg
@stop

<!--Image 200px wide-->
@section('image_right')
    http://2183bb2632b00d8aa0b3-40e51394fe766397114262205a4ab22d.r37.cf5.rackcdn.com/female_products.jpg
@stop

@section('section2')
    <strong>As you've never been to Paul Kemp Hairdressing before, we'd love you to experience the salon for yourself.</strong> 
    <br><br>We have a team of ten talented, friendly staff ready to look after you.
    We've won numerous hairdressing awards and you only have to look at our customer testimonials and Facebook reviews to see how highly rated we are.
    <br><br>
    <a href="https://www.facebook.com/PaulKempHairdressing">Paul Kemp Hairdressing Facebook page</a>
@stop

@section('section3')
    Based on the information you gave, we think <strong> @if(App::isLocal())
                                        {!! getStylists(1, 2, 'F') !!}
                                    @else 
                                        {!! getStylists($cut_price, $colour_price, $gender) !!}
                                    @endif </strong>
    would be great stylists for you to try. 
    We're sending out a voucher along with your products so you can  experience a <strong>FREE Blow Dry and @if(App::isLocal())
                                        {{ getTreatment('fine', 'dry') }}
                                    @else 
                                        {!! getTreatment($cut_spend, $colour_spend) !!}
                                    @endif 
    treatment</strong> with them. 
    <br><br>
    <strong>I'm sure once you've experienced Paul Kemp Hairdressing you won't want to go anywhere else!</strong>
@stop

@section('section4')
    Thanks again and we look forward to seeing you soon!
    <br><br>
    <span style="font-size: 20px;">The Paul Kemp Hairdressing team</span>
@stop


@section('footer_colour')
    color: #999999;" bgcolor="#3f4960
@stop

