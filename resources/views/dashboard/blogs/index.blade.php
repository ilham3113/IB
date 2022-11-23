@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p-2">
<h1 class="h2">Statistic</h1>
<button type="button" class="btn btn-sm btn-outline-secondary rounded-2 dropdown-toggle" data-bs-toggle="dropdown">This Week</button>
    <ul class="dropdown-menu">
        <li><a href="" class="dropdown-item">This Month</a></li>
        <li><a href="" class="dropdown-item">This Years</a></li>
    </ul>
</div>
<div class="canvas">
<canvas id="myChart" style="width: 100%" height="460vh"></canvas>
</div>
{{-- <div class="row">
    <div class="col-md-8">
        <div class="top blog-top text-center mb-5">
            <div class="blog">
                <div class="info">
                    <a href="/blog">
                    <h3><span class="fas fa-list-ul"></span> All Blog's</h3>
                    <hr>
                    <h1>12</h1>
                    </a>
                </div>
            </div>
            <div class="blog">
                <div class="info">
                    <a href="/blog">
                    <h3><span class="fas fa-list-ul"></span> Blog's in Week</h3>
                    <hr>
                    <h1>12</h1>
                    </a>
                </div>
            </div>
            <div class="draf">
                <div class="info">
                    <h3><span class="far fa-bookmark"></span> All Draf</h3>
                    <hr>
                    <h1>12</h1>
                </div>
            </div>
            <div class="draf">
                <div class="info">
                    <h3><span class="far fa-bookmark"></span> Draf in Week</h3>
                    <hr>
                    <h1>12</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        
    </div>
</div> --}}
<div class="row">
    <section>
        <h1 class="h1 text-center">--- All Blog's ---</h1>
        <div class="row">
            <div class="col-md-10 col-10">
                <a href="{{ route('blog.create') }}" class="btn btn-success col-md-3 col-6 rounded-4"><span class="fas fa-plus"></span> Tambah</a>
            </div>

            <div class="d-flex justify-content-end col-md-2 col-2">
                <button class="btn" type="button" data-bs-toggle="dropdown"><span class="fas fa-sort"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="" class="dropdown-item"><span class="fas fa-sort-alpha-up"></span> Urutkan Berdasarkan Abjad</a></li>
                    <li><a href="" class="dropdown-item"><span class="fas fa-sort-amount-up"></span> Urutkan Berdasarkan yang terbaru</a></li>
                </ul>
            </div>
        </div>

        <table class="table table-blog">
            @foreach ($blogs as $blog)
            <tr>
                <td class="col-md-11">
                    <div class="blog-post">
                        <p class="blog-post-title"><b class="h3"><a href="{{ route('blog.show',$blog->slug) }}">{{ $blog->title }}</a></b></p>
                        <p>
                            <small>
                                <cite>Category : <a href="{{ route('category.show',$blog->category->slug) }}">{{ $blog->category->name }}.</a> <span class="far fa-calendar"></span>  {{ $blog->created_at->format('d M Y') }}.</cite>
                            </small>
                        </p>
                        <div>
                            {!! $blog->excerpt !!}
                        </div>
                    </div>
                </td>
            <td>
                <div class="dropstart">
                    <form action="{{ route('blog.destroy',$blog->slug) }}" method="post">
                        @csrf
                        @method('DELETE')
                    <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="fas fa-ellipsis-h"></span>
                    </button>
                    <div class="back"></div>
                    <ul class="dropdown-menu drop">
                      <li><a class="dropdown-item" href="{{ route('blog.edit',$blog->slug) }}"><span class="fas fa-file-pen"></span> Edit</a></li>
                      <li><button type="submit" class="dropdown-item" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><span class="fas fa-trash-can " ></span> Delete</button></li>
                    </ul>
                    </form>
                  </div>
            </td>
        </tr>
        @endforeach
        </table>
    </section>
</div>
@endsection