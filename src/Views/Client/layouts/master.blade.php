<!DOCTYPE html>
<html lang="vi">

<head>
    @include('layouts.partials.head')
</head>

<body>
    <div class="preloader">
        <div></div>
        <div>Đang tải nội dung!</div>
    </div>

    <nav>
        @include('layouts.partials.nav')
    </nav>

    <div>
        {{-- <header class="showcase">
            @include('layouts.partials.header')
        </header>
    
        <section> --}}
            @yield('content')
            {{-- <div class="container">
                <h1 class="editor-h1">Danh Sách Tin Tức Mới Nhất</h1>
                <div class="articles">
                    @foreach ($posts as $post)
                        <a href="./html/article.html" class="card">
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
            </div> --}}
        {{-- </section> --}}
    </div>

    <footer>
        @include('layouts.partials.footer')
    </footer>

    @include('layouts.partials.script')
    
</body>

</html>
