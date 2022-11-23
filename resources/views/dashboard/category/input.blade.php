@extends('dashboard.layouts.main')

@section('content')
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="form-floating mb-4">
            <input type="text" id="category_id" class="form-control form" name="name" placeholder="name category">
            <label for="category_id">New Category</label>
        </div>
        <button type="submit" class="btn btn-success"><span class="fas fa-plus"></span> Tamba</button>
    </form>
@endsection