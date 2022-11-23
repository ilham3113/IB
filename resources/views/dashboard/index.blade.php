@extends('dashboard.layouts.main')

@section('content')
<div class="top d-flex row justify-content-around">
    <div class="blog col-lg-7 col-md-7 col-sm-12">
        <div class="info">
            <a href="/blog" class="row d-flex text-align-center" style="text-decoration: none">
            <h3 class="col-6"><span class="fal fa-list-ul"></span> Total Blog's</h3>
            <h3 class="col-6 draf"><span class="fal fa-bookmark"></span> Total draf</h3>
            <hr>
            <h1 class="col-6">{{ $tblog }}</h1>
            <h1 class="col-6">12</h1>
            <div class="d-flex justify-content-center">
            <canvas id="blogdashbord"></canvas>
            </div>
            </a>
        </div>
    </div>
    <div class="category col-lg-4 col-md-4 col-sm-12">
        <div class="info">
            <a href="/category">
            <h3><span class="fal fa-code-branch"></span> Total categories</h3>
            <hr>
            <h1>{{ $tcategory }}</h1>
            <canvas id="category"></canvas>
            </a>
        </div>
    </div>
</div>

<div class="populer-blog">
    <h2>Populer Blog</h2>

    <table class="table table-striped">
            <tr class="title">
                <th class="no">No</th>
                <th class="title">Title</th>
                <th class="category">Category</th>
                <th class="date">Date</th>
            </tr>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td class="no">{{ $loop->iteration }}</td>
                <td class="title"><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a></td>
                <td class="category"><a href="/category/{{ $blog->category->slug }}">{{ $blog->category->name }}</a></td>
                <td class="date">{{ $blog->created_at->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection