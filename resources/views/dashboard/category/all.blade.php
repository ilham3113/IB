@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-around mb-4">
    <a href="/category" class="btn btn-outline-success rounded-4 col-md-4 col-4"><span class="fal fa-plus"></span> Back</a>
    <a href="{{ route('category.create') }}" class="btn btn-outline-primary rounded-4 col-md-4 col-4"><span class="fal fa-plus"></span> All Category</a>
</div>
<main class="category">
    <table class="table table-striped">
        <tr class="title">
            <th class="no">No</th>
            <th class="name">Category</th>
            <th class="count">Jumlah</th>
            <th class="edit">edit</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td class="no">{{ $loop->iteration }}</td>
                <td class="name"><a href="{{ route('category.show',$category->slug) }}">{{ $category->name }}</a>
                </td>
                <td class="count">{{ $category->articel->count() }}</td>
                <td class="edit"><a href="{{ route('category.edit',$category->slug) }}" class="btn btn-sm btn-warning "><span class="fal fa-edit"></span></a></td>
            </tr>
        @endforeach
    </table>
</main>
@endsection