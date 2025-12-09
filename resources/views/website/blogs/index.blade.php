@extends('website.layouts.app')
@section('content')
<div class="container my-5">
    <h1>Blog</h1>
    <div class="row mt-4">
        @foreach($blogs as $blog)
        <div class="col-md-4 mb-4">
            <div class="card">
                @if($blog->featured_image)
                <img src="{{ asset($blog->featured_image) }}" class="card-img-top" alt="{{ $blog->title }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <p class="card-text">{{ Str::limit(strip_tags($blog->content), 150) }}</p>
                    <p class="text-muted small">{{ $blog->published_at->format('d M Y') }}</p>
                    <a href="{{ route('website.blogs.show', $blog->slug) }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{ $blogs->links() }}
</div>
@endsection
