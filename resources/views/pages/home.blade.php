@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Paul Kemp Hairdressing - Home - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed.js') }}"></script>

<section id="home">
    
    <div id="feedback_feed">
      	<ul>
      	@foreach($reviews as $review)
      	    <li>&quot;{{ limit_words($review->review) }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
      	@endforeach
      	</ul>
      	<p><a href="{{ URL::to('reviews') }}">More reviews here</a></p>
    </div> <!--#feedback_feed-->
        
    <div class="columns">
      <section class="column is-4 is-offset-8">
          <h2>A New Standard of Hairdressing</h2>
          <p>Paul Kemp Hairdressing is located right in the heart of Warrington town centre. Sister salon to the award winning <em><a href="http://www.jakatasalon.co.uk/" target="_blank">Jakata</a></em>, the stunning salon opened in June 2011 with the aim to offer an ultra relaxing atmosphere, first class customer service, alongside the highest level of hairdressing expertise.</p>
          <p>The talented hairdressing team are all trained to the highest level in cutting, colouring and styling hair, with specialists in technical colour, hair straightening, wedding hair and hair extensions. The team has a wealth of experience in all aspects of hairdressing so you can just sit back, relax and enjoy the experience.</p>
          <p><em>The salon has built up a strong reputation for creating stunning, fashionable looks tailored to suit you, and your lifestyle, so if you're looking for a new <strong class="paraend">hairdressers in Warrington</strong> then look no further!</em></p>
      </section>
    </div>

    <div class="columns">
      @foreach($blogs as $blog)
      <div class="column">
        <a href="{{ URL::to('blog') }}/{{ $blog->slug }}">
          <div class="card">
            <div class="card-image">
              <figure class="image is-3by4">
                <img src="" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="media">
                <div class="media-content">
                  <p class="title is-4">{{ $blog->title }}</p>
                </div>
              </div>
              <div class="content">
                {{ limit_news_words($blog->paras()->first()->para) }}&hellip;
              </div>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
	</div>

</section> <!--#home-->

@stop