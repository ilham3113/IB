@extends('dashboard.layouts.main')

@section('content')
    <form action="{{ route('category.update',$category->slug) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-floating">
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" placeholder="name">
            <label for="name">name</label>
        </div>

        <button type="submit">UPDATE</button>
    </form>
@endsection 