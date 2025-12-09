@extends('website.layouts.app')
@section('content')
<div class="container my-5">
    <h1>{{ $page->title }}</h1>
    <div class="content mt-4">
        {!! $page->content !!}
    </div>
</div>
@endsection
