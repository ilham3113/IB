@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-around mb-4">
    <a href="{{ route('category.create') }}" class="btn btn-outline-success rounded-4 col-md-4 col-lg-4 col-sm-12"><span class="fal fa-plus"></span> Add Category</a>
    <a href="/category.all" class="btn btn-outline-primary rounded-4 col-md-4 col-lg-4 col-sm-12"><span class="fal fa-plus"></span> All Category</a>
</div>
<div class="row justify-content-around">
    <div class="col-lg-5 col-md-5 col-sm-12 mb-3">
        <canvas id="category" style="width: 100%" height="400"></canvas>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
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
    </div>
</div>
@endsection
