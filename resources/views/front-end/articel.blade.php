@extends('front-end.layouts.main')

@section('content')
    <main class="single mb-4">
        <h1>{{ $article->title }}</h1>
        <div class="d-flex justify-content-center">
            @if ($article->images)
            <img src="{{ asset('storage/' . $article->images) }}">
            @else
            <img src="/image/bg-showcase-2.jpg">
            @endif
        </div>
        <p>{!! $article->body !!}</p>
    </main>
@endsection
