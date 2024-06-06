<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="57x57" href="./favicon/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="./favicon/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="./favicon/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="./favicon/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="./favicon/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="./favicon/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="./favicon/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="./favicon/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="./favicon/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="./favicon/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
    <link rel="manifest" href="./favicon/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="./favicon/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <title>News Hot | Trang chủ</title>
    <script src="https://kit.fontawesome.com/eaa4609b2f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/client/css/style.css') }}" />
</head>

<body>
    <div class="preloader">
        <div></div>
        <div>Đang tải nội dung!</div>
    </div>

    <nav>
        <div class="container">
            <div class="logo">

            </div>

            <div class="social">
                <li><a href="#">Giáo dục</a></li>
                <li><a href="#">Sức khỏe</a></li>
                <li><a href="#">Công nghệ</a></li>
                <li><a href="#">Pháp luật</a></li>
                <li><a href="#">Thể thao</a></li>
            </div>

            <div class="options">
                <a href="./index.html" class="current">Trang chủ</a>
                <a href="./html/about.html">Về chúng tôi</a>
            </div>
        </div>
        <div class="logo1">
            <i class="fas fa-globe fa-3x"></i>
            <h1>News<span>Hot</span></h1>
        </div>
        {{-- @if (empty($_SESSION['account']))
            <div class="login">
                <a href="{{ url('login') }}">Đăng Nhập</a>
            </div>
        @else
            <div class="login">
                <h4>Hi {{$_SESSION['account']['name']}}</h4>
            </div>
        @endif
        
        @if ($_SESSION['account']['role'] === 1)
            <a href="{{url('admin')}}">Vào trang Admin</a>
        @endif --}}
        @if (isset($_SESSION['account']))
            <div class="login">
                <h4>Hi {{ $_SESSION['account']['name'] }}</h4>
            </div>
            <a href="{{ url('logout') }}">Logout</a>
            @if ($_SESSION['account']['role'] === 1)
                <a href="{{ url('admin') }}">Vào trang Admin</a>
            @endif
        @else
            <div class="login">
                <a href="{{ url('login') }}">Đăng Nhập</a>
            </div>
        @endif
    </nav>

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


                {{-- <a href="./html/article.html" class="card">
                    <img src="./images/articles/tech1.jpg" alt="" />

                    <article>
                        <p class="sports-category">Thể thao</p>
                        <h1>Lorem ipsum dolor sit amet.</h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi
                            nisi neque eum libero maiores voluptatem repudiandae quos
                            perspiciatis, reiciendis dolor!
                        </p>
                    </article>
                </a>

                <a href="./html/article.html" class="card">
                    <img src="./images/articles/tech1.jpg" alt="" />
                    <article>
                        <p class="technology-category">Công nghệ</p>
                        <h1>Lorem ipsum dolor sit amet.</h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi
                            nisi neque eum libero maiores voluptatem repudiandae quos
                            perspiciatis, reiciendis dolor!
                        </p>
                    </article>
                </a>

                <a href="./html/article.html" class="card">
                    <article>
                        <p class="sports-category">Thể thao</p>
                        <h1>Lorem ipsum dolor sit amet.</h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi
                            nisi neque eum libero maiores voluptatem repudiandae quos
                            perspiciatis, reiciendis dolor!
                        </p>
                    </article>
                    <img src="./images/articles/sports1.jpg" alt="" />
                </a>

                <a href="./html/article.html" class="card">
                    <img src="./images/articles/tech2.jpg" alt="" />
                    <article>
                        <p class="technology-category">Công nghệ</p>
                        <h1>Lorem ipsum dolor sit amet.</h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi
                            nisi neque eum libero maiores voluptatem repudiandae quos
                            perspiciatis, reiciendis dolor!
                        </p>
                    </article>
                </a>

                <a href="./html/article.html" class="card">
                    <img src="./images/articles/tech1.jpg" alt="" />
                    <article>
                        <p class="sports-category">Thể thao</p>
                        <h1>Lorem ipsum dolor sit amet.</h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi
                            nisi neque eum libero maiores voluptatem repudiandae quos
                            perspiciatis, reiciendis dolor!
                        </p>
                    </article>
                </a>

                <a href="./html/article.html" class="card">
                    <article>
                        <p class="entertainment-category">Giải trí</p>
                        <h1>Lorem ipsum dolor sit amet.</h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi
                            nisi neque eum libero maiores voluptatem repudiandae quos
                            perspiciatis, reiciendis dolor!
                        </p>
                    </article>
                    <img src="./images/articles/ent2.jpg" alt="" />
                </a> --}}
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer">
                <article>
                    <div class="logo">
                        <i class="fas fa-globe fa-2x"></i>
                        <h2>News<span>Grid</span></h2>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit
                        deserunt assumenda enim non? Ratione ipsum voluptates fuga eos
                        earum vitae.
                    </p>
                </article>

                <article>
                    <h4>EMAIL BẢN TIN</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <input type="email" placeholder="Nhập email..." />
                    <a href="#"> Đăng ký</a>
                </article>

                <article>
                    <h4>LIÊN KẾT TRANG</h4>
                    <p>Hỗ trợ & trợ giúp</p>
                    <p>Chính sách bảo mật</p>
                    <p>Về chúng tôi</p>
                    <p>Liên hệ</p>
                </article>

                <article>
                    <h4>THAM GIA CLB CỦA CHÚNG TÔI</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Obcaecati, maiores!
                    </p>
                    <a href="#">Tham gia ngay</a>
                </article>
            </div>

            <div class="copyright">
                <p>Bản quyền &copy; 2021, Đã đăng ký bản quyền</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/client/js/script.js') }}"></script>
</body>

</html>
