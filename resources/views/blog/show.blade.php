@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => $blog->paras()->first()->para,
	'keywords' => 'Paul Kemp Hairdressing news, PK news stories',
	'ogtitle' => $blog->title,
	'ogdescription' => $blog->paras()->first()->para,
	'ogimage' => $blog->meta_image,
	'title' => 'Paul Kemp Hairdressing -' . $blog->title . '- Hairdressers in Warrington'
	])
@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="blog">

    <article>
        <h2>{{ $blog->title }}</h2>
        
        @foreach($blog->paras as $para)
            
            @if($para->para_pic !== NULL)
                <div class="blog-pic">
                    <img src="{{ $para->para_pic }}" alt="{{ $para->para_pic_alt }}" style="height: 70%; width: 70%;">
                </div>
            @endif
        
            {!! addTag($para->para) !!}
            
        @endforeach
        <p><a href="{{ URL::to('blog') }}#{{ $blog->slug }}">Back to all the blogs &gt;</a></p>
        <small>Published by {{ $blog->author }}</small>
        <time datetime="{{ $blog->created_at }}">{{ $blog->created_at->format('d F Y') }}</time>
        
        <div id="fb-like">
			<div class="fb-like" data-href="{{ URL::to('blog') }}/{{ $blog->slug }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
		</div>
        
    </article>

</section>

@stop