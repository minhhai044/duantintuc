@extends('layouts.master')

{{-- @section('title')
    Quản lý Sản phẩm
@endsection --}}

@section('content')
<header class="showcase">
    <div class="container">
        <div class="text-content">
            <p class="sports-category">thể thao</p>
            <h1>một bài viết thể thao</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                temporibus nesciunt in aut facilis optio eum, et nisi obcaecati
                accusamus reprehenderit iste facere nobis, qui eaque totam,
                laboriosam sequi animi?
            </p>
            <a href="./html/article.html">Đọc thêm</a>
        </div>
    </div>
</header>
<section>
    <div class="container">
        <h1 class="editor-h1">Danh Sách Tin Tức Mới Nhất</h1>
        <div class="articles">
            @foreach ($posts as $post)
                <a href="{{url('detail/') . $post['id']}}" class="card">
                    <img src="{{ $post['img_post'] }}" alt="" />
                    <article>
                        <p class="entertainment-category">{{ $post['c_name'] }}</p>
                        <h1>{{ $post['title'] }}</h1>
                        <p>
                            {{ $post['excerpt'] }}
                        </p>
                    </article>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endsection
