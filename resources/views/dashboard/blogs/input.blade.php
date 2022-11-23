@extends('dashboard.layouts.main')

@section('content')
    <form action="{{ route('blog.store') }}" method="post" class="mt-3" enctype="multipart/form-data">
        @csrf
        <div class="d-flex justify-content-end mb-3">
        <button class="btn" type="button" data-bs-toggle="dropdown">
            <span class="fas fa-ellipsis-h"></span>
        </button>
        
        <ul class="dropdown-menu">
            <li><a href="/back" class="dropdown-item"><span class="fas fa-left-long"></span> Kembali</a></li>
            <li><button type="submit" class="dropdown-item"><span class="fas fa-globe-asia"></span> Publish</button></li>
        </ul>
        </div>

        <div class="form-floating">
            <input type="text" class="title form-control form @error('title') is-invalid @enderror" placeholder="Title" name="title" value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <label for="title">Title</label>
        </div>

        <div class="image">
            <img class="image-preview d-flex justify-content-center img-fluid">
            <input type="file" class="form-control form  @error('image') is-invalid @enderror" id="images" name="images" onchange="ImagePreview()" placeholder="img" value="{{ old('image') }}">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-floating">
            <select name="category_id" class="form form-control form-select">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <label for="category_id">Category</label>
        </div>

        <div class="mt-5 input-body">
            <label for="body" class="form-label h4 d-flex justify-content-center mb-3  @error('body') is-invalid @enderror">Body</label>
            @error('body')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <input type="hidden" id="body" name="body" required value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
        </div>
    </form>
@endsection