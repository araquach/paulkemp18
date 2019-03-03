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

<div id="blog" class="section box">
    <h2 class="title is-2">{{ $blog->title }}</h2> 
    <article class="columns">
        <div class="column is-5">
            @foreach($blog->paras as $para)
                @if($para->para_pic !== NULL)
                        <div class="image side-image">
                            <figure class="image has-margin-5">
                                <img src="{{ $para->para_pic }}" alt="{{ $para->para_pic_alt }}">
                            </figure>
                        </div>
                @endif
            @endforeach
        </div>
        <div class="column">
            @foreach($blog->paras as $para)
                {!! addTag($para->para) !!}
            @endforeach 
            
            <p><a href="{{ URL::to('blog') }}#{{ $blog->slug }}">Back to all the blogs &gt;</a></p>
            <small>Published by {{ $blog->author }}</small>
            <time datetime="{{ $blog->created_at }}">{{ $blog->created_at->format('d F Y') }}</time>
            
            <div id="fb-like">
    			<div class="fb-like" data-href="{{ URL::to('blog') }}/{{ $blog->slug }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
    		</div>
        </div>
    </article>

</div>

@stop