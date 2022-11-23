@extends('dashboard.layouts.main')

@section('content')
    <main class="show">
        <form action="{{ route('blog.destroy',$blog->slug) }}" class="mb-3" method="POST">
            @method('DELETE')
            @csrf
            <a href="/blog" class="btn btn-primary"><span class="fas fa-left-long"></span><span>Kembali</span></a>
            <a href="{{ route('blog.edit',$blog->slug) }}" class="btn btn-warning"><span class="fas fa-edit"></span> Edit</a>
            <button class="btn btn-danger" onclick="return confirm('apakah anda ingin menghapus blog ini?')"><span class="fas fa-trash-can"></span> Delete</button>
        </form>
        <div class="preview">
        <h1 class="justify-content-center">{{ $blog->title }}</h1>
        <div class="d-flex justify-content-center">
        @if ($blog->images)
        <img src="{{ asset('storage/' . $blog->images) }}">
        @else
        <img src="/image/bg-showcase-2.jpg" class="mb-3">
        @endif
        </div>
        <p>{!! $blog->body !!}</p>
        </div>
    </main>
@endsection