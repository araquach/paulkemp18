@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
'title' => 'Paul Kemp Hairdressing - Abi Moves to Base - Hairdressers in Warrington'
])

@stop

@section('content')

<div id="base">
  <div class="columns section">
    <div class="column is-6">
      <h2 class="title is-3 has-text-primary">Abi is relocating to our new salon</h2>
      <p class="is-size-5">We our opening a brand new salon called <strong>Base Hairdressing</strong> that will be an academy to train up the next generation of PK and Jakata stylists.</p>
      <p>The new salon is at our previous Jakata site which we've spent the last 18 moths renovating - it looks amazing!</p>
      <p>To get things off the ground we're taking a selection of our existing stylists from both sites to help launch the brand.</p>
      <p class="is-size-5">Abi has volunteered and will be joining Adam, Jimmy and Lauren from Jakata. She will be working from Base hairdressing for the next 6 to 12 months.</p>
      <p>We will also be recruiting apprentices and also renting out a number of chairs too.</p>
      <p><strong>If you are a client of Abi's, your future appointments will be at Base Hairdressing. All appointments have been transferred and remain the same - you'll just be at our brand new salon.</strong></p>
      <p>I hope you're as excited as us about the move, we're confident the transition will be smooth and you'll love the new salon! (Though there might be a couple of teething problems along the way! Hopefully not too many!)</p>
      <p class="is-size-5">If you have any questions regarding the changes, don't hesitate to get in touch by calling PK on 01925 444488</p>
      <pclass="is-size-5">Our new phone number for Base Hairdressing is 01925 444449 and will be in use from Tuesday 23rd July</p>
      <p class="is-size-5"><strong>Abi and the rest of the team look forward to seeing you in the new salon!</strong></p>
      <p>See the Jakata blog post to find out more:</p>
      <a href="https://jakatasalon.co.uk/blog/major-revamp" class="button is-primary" target="_blank">Find Out More</a>
    </div>
    <div class="column">
      <figure>
        <img src="{{ asset('images/base/base.jpg') }}" alt="Base Hairdressing">
      </figure>
    </div>
  </div>
</div>

@stop
