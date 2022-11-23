@extends('front-end.layouts.main')
@section('content')

@include('front-end.components.navbar')

@if ($Articles->count())
<main class="hero rounded text-bg-dark">
  <div class="col-md-9 px-0" style="max-height: 200px">
    <h1 class="display-5 fst-italic"><a href="/{{ $Articles[0]->slug}}" class="text-white" style="text-decoration: none">{!! Str::limit($Articles[0]->title, 29, '...') !!}</a></h1>
    <p class="lead my-3">{!! Str::limit($Articles[0]->excerpt, 180, '...') !!}</p>
    <p class="lead"><a href="/{{ $Articles[0]->slug }}" class="text-white fw-bold">Continue reading...</a></p>
  </div>
</main>
<hr>

<div class="row">
<div class="col-md-8 col-12">
  @foreach ($Articles->skip(1) as $article)
  <article class="blog-post border-bottom">
    <a href="/{{ $article->slug }}" class="blog-post-title">{!! Str::limit($article->title, 37, '...') !!}</a>
    <p class="blog-post-meta">Category: <a href="/?category={{ $article->category->slug }}">{{ $article->category->name }}</a>. {{ $article->created_at->format(' d M Y') }}</p> 
    <div class="mb-3">{!! Str::limit($article->excerpt, 150, '...') !!}</div>
  </article>
  @endforeach
</div>
@else
<div class="row">
<div class="col-md-8 col-12">
    @include('front-end.404')
  </div>
    @endif

<div class="col-md-4 side-menu">
  <div class="position-sticky" style="top: 2rem;">
    <div class="p-4 mb-3 about rounded">
      <h4 class="fst-italic border-bottom">About</h4>
      <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
    </div>

    <div class="p-4">
      <h4 class="fst-italic">Elsewhere</h4>
      <ol class="list-unstyled">
        <li><a href="#"><span class="fab fa-github-alt"></span> GitHub</a></li>
        <li><a href="#"><span class="fab fa-twitter"></span> Twitter</a></li>
        <li><a href="#"><span class="fab fa-instagram"></span> Instagram</a></li>
        <li><a href="#"><span class="fa fa-globe-asia"></span> My website</a></li>
      </ol>
    </div>
  </div>
</div>
</div>

<div class="d-flex justify-content-center mt-3 mb-3">
  {{ $Articles->links() }}
</div>

@endsection