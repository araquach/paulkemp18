@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Keep up to date with the latest PK blog posts',
	'keywords' => 'Paul Kemp Hairdressing news, PK news stories, blog, blogs',
	'ogtitle' => 'Blog Posts',
	'ogdescription' => 'All the latest PK news and stories in our blog',
	'ogimage' => '',
	'title' => 'Paul Kemp Hairdressing - PK News - Hairdressers in Warrington'
	])
@stop

@section('content')

<section id="blog">
    
    @foreach($blogs as $blog)
        <article>
            <a id="{{ $blog->slug }}" class="anchor"></a>
            <h2>{{ $blog->title }}</h2>
            <div class="blog-pic">
                <img src="{{ $blog->paras()->first()->para_pic }}" alt="{{ $blog->paras()->first()->para_pic_alt }}" style="height: 70%; width: 70%;">
            </div>
            
                <p>{{ $blog->paras()->first()->para }}</p>
                <p><a href="{{ URL::to('blog') }}/{{ $blog->slug }}">Read more &gt;</a></p>
                <small>Published by {{ $blog->author }}</small>
                <time datetime="{{-- $blog->created_at --}}">{{ $blog->created_at->format('d F Y') }}</time>
        
        </article>
    @endforeach
    
</section>

@stop