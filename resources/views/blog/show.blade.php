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

<div id="blog" class="section">
        
    <article class="columns box has-margin-3">
        <h2 class="title is-3 is-block is-pulled-left">{{ $blog->title }}</h2>
        <div class="column is-5">
            <figure class="image">
                <img src="{{ $blog->paras()->first()->para_pic }}" alt="{{ $blog->paras()->first()->para_pic_alt }}">
            </figure>
        </div>

        <div>
            @foreach($blog->paras as $para)
                
                @if($para->para_pic !== NULL)
                    <div class="image">
                        <figure class="image">
                            <img src="{{ $para->para_pic }}" alt="{{ $para->para_pic_alt }}">
                        </figure>
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
        </div>
    </article>

</div>

@stop