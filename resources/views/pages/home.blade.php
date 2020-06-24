@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
'title' => 'Paul Kemp Hairdressing - Home - Hairdressers in Warrington'
])

@stop

@section('content')

<div id="home">
  <div class="hero home-image-mobile is-fullheight is-hidden-tablet">
    <div class="hero-body">
    </div>
  </div>
   <div class="columns">
    <div class="column is-5 is-offset-7">
      <section class="section is-size-5-mobile">
        <h2 class="title 2 has-text-primary has-text-centered">A New Standard of Hairdressing</h2>
        <p>Paul Kemp Hairdressing is located right in the heart of Warrington town centre. Sister salon to the award winning <em><a href="http://www.jakatasalon.co.uk/" target="_blank">Jakata</a></em>, the stunning salon opened in June 2011 with the aim to offer an ultra relaxing atmosphere, first class customer service, alongside the highest level of hairdressing expertise.</p>
        <p>The talented hairdressing team are all trained to the highest level in cutting, colouring and styling hair, with specialists in technical colour, hair straightening, wedding hair and hair extensions. The team has a wealth of experience in all aspects of hairdressing so you can just sit back, relax and enjoy the experience.</p>
        <p><em>The salon has built up a strong reputation for creating stunning, fashionable looks tailored to suit you, and your lifestyle, so if you're looking for a new <strong class="paraend">hairdressers in Warrington</strong> then look no further!</em></p>
        <section id="feedback-feed-container">
          <div id="feedback_feed" class="box">
            <ul>
              @foreach($reviews as $review)
                <li class="is-size-6">
                  &quot;{{ limit_words($review->review) }}&quot;<br><span class="is-size-7">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span>
                </li>
             @endforeach
           </ul>
           <p><a href="{{ URL::to('reviews') }}">More reviews here</a></p>
          </div>
      </section>
      </section>
    </div>
  </div>

  <div class="section columns">
  <div class="column">
      <a href="{{ URL::to('corona') }}">
        <div class="card">
          <div class="card-image">
            <figure class="image">
              {{ Html::image('images/corona/corona_home.jpg') }}
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <div class="media-content">
                <p class="title is-6 is-size-4-mobile">COVID-19 Guidelines for your appointment</p>
              </div>
            </div>
            <div class="content is-size-7 is-size-5-mobile">
            Find out the new guidelines for your next visit to the salon here&hellip;
            </div>
          </div>
        </div>
      </a>
    </div>
    @foreach($blogs as $blog)
    <div class="column">
      <a href="{{ URL::to('blog') }}/{{ $blog->slug }}">
        <div class="card">
          <div class="card-image">
            <figure class="image">
              <img src="{{ $blog->paras()->first()->para_pic }}" alt="{{ $blog->paras()->first()->alt }}">
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <div class="media-content">
                <p class="title is-6 is-size-4-mobile">{{ $blog->title }}</p>
              </div>
            </div>
            <div class="content is-size-7 is-size-5-mobile">
              {{ limit_news_words($blog->paras()->first()->para) }}&hellip;
            </div>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>

</div>

@stop