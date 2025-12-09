@extends('website.layouts.app')
@section('content')
<div class="container my-5">
    <article>
        <h1>{{ $blog->title }}</h1>
        <p class="text-muted">Published on {{ $blog->published_at->format('d M Y') }} by {{ $blog->author->name }}</p>
        
        @if($blog->featured_image)
        <img src="{{ asset($blog->featured_image) }}" class="img-fluid my-4" alt="{{ $blog->title }}">
        @endif
        
        <div class="content">
            {!! $blog->content !!}
        </div>
    </article>
</div>
@endsection
