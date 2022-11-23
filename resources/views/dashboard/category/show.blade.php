@extends('dashboard.layouts.main')

@section('content')
    <main>
        <table class="table table-blog">
            @foreach ($categories as $category)
                <tr>
                    <td class="col-md-11">
                        <div class="blog-post">
                            <p class="blog-post-title"><b class="h3"><a href="{{ route('blog.show',$category->slug) }}">{{ $category->title }}</a></b></p>
                            <p>
                                <small class="fs-italic"> ---  Category : <a href="{{ $category->category->slug }}">{{ $category->category->name }}. </a> <span class="far fa-calendar"></span> {{ $category->created_at->format('d M Y') }}. ---</small>
                            </p>
                            {!! $category->excerpt !!}
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </main>
@endsection