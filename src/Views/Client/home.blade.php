@extends('layouts.master')
@section('title')
    Trang Chủ | NewsHot
@endsection
@section('content')
    <header class="showcase">
        <div class="container">
            {{-- <div class="text-content">
                <p class="sports-category">thể thao</p>
                <h1>một bài viết thể thao</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                    temporibus nesciunt in aut facilis optio eum, et nisi obcaecati
                    accusamus reprehenderit iste facere nobis, qui eaque totam,
                    laboriosam sequi animi?
                </p>
                <a href="./html/article.html">Đọc thêm</a>
            </div> --}}
        </div>
    </header>
    <section class="sec-content">
        <div class="container">
            <h1 class="editor-h1">Danh Sách Tin Tức Mới Nhất</h1>
            <div class="articles">
                @foreach ($posts as $post)
                    <a href="{{ url('detail/' . $post['id']) }}" class="card">
                        @if (!empty($_SESSION['page'] && $_SESSION['page'] !== 1))
                            <img src="../{{ $post['img_post'] }}" style="height:200px" alt="" />
                        @else
                            <img src="{{ $post['img_post'] }}" style="height:200px" alt="" />
                        @endif

                        <article>
                            <p class="entertainment-category">{{ $post['c_name'] }}</p>
                            <h4>{{ $post['title'] }}</h4>
                            <p>
                                {{ $post['excerpt'] }}
                            </p>
                            <p class="view">Lượt xem : {{$post['view']}}</p>
                        </article>
                    </a>
                @endforeach
            </div>

        </div>
        <div class="paginate">
            <ul class="pagination">

                @for ($i = 1; $i <= $totalPage; $i++)
                    <li
                        class="page-item {{ (empty($_SESSION['page']) && $i == 1) || (!empty($_SESSION['page']) && $_SESSION['page'] == $i) ? 'active' : '' }}">
                        <a class="page-link" href="{{ $i !== 1 ? url('page/' . $i) : url() }}">{{ $i }}</a>
                    </li>
                @endfor
                @php
                    unset($_SESSION['page']);
                @endphp

            </ul>
        </div>
    </section>
@endsection
