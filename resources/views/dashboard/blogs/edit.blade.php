@extends('dashboard.layouts.main')

@section('content')
<main>
    <form action="{{ route('blog.update',$blog->slug) }}" method="post" class="mt-3" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-floating form">
        <input type="text" name="title" class="title form-control form  @error('title') is-invalid @enderror" placeholder="Title" value="{{ $blog->title }}">
        <label for="title">Title</label>
        @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <input type="hidden" name="oldimage" value="{{ $blog->images }}">
        @if ($blog->images)
            <img src="{{ asset('storage/' . $blog->images) }}" class="image-preview img-fluid col-sm-5 d-block">
        @else
            <img class="image-preview" alt="">
        @endif

        <input type="file" class="form-control forms  @error('image') is-invalid @enderror" id="images" onchange="ImagePreview()" name="images">
        @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-floating form">
        <select name="category_id" class="form form-control form-select mb-3" id="">
            @foreach ($categories as $category)
            @if (old('category_id', $blog->category_id) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
        </select>
        <label for="Category_id">Category</label>
    </div>

    <div class="mt-5 input-body">
        <label for="body" class="form-label h4 d-flex justify-content-center mb-3  @error('body') is-invalid @enderror">Body</label>
        <input type="hidden" id="body" name="body" required value="{{ $blog->body }}">
        <trix-editor input="body"></trix-editor>
        @error('body')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Publish</button>
    </form>
</main>
@endsection