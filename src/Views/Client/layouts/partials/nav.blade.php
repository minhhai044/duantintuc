<div class="container">
    <div class="logo">

    </div>

    <div class="social">
        @foreach ($categories as $cate)
            <li><a href="{{ url('category/' . $cate['id']) }}">{{ $cate['name'] }}</a></li>
        @endforeach
    </div>
    <form action="{{ url('search') }}" method="post">

        <div class="input-group search">
            <input type="search" class="form-control rounded" name="kyw" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />
            <button type="submit" name="search" class="btn btn-outline-danger">search</button>
        </div>
    </form>

    <div class="options">
        <a href="{{ url('') }}" class="current">Trang chủ</a>
        <a href="{{ url('about') }}">Giới thiệu</a>
    </div>
</div>
<div class="logo1">
    <i class="fas fa-globe fa-3x"></i>
    <h2>News<span>Hot</span></h2>
</div>
@if (isset($_SESSION['account']))
    <div class="login">
        <h6>Hi {{ $_SESSION['account']['name'] }}</h6>
    </div>
    <div class="logout">
        <a href="{{ url('logout') }}"><span class="material-symbols-outlined">
                logout
            </span></a>
    </div>
    <div class="login-admin">
        @if ($_SESSION['account']['role'] === 1)
            <a href="{{ url('admin') }}">Đăng nhập admin</a>
        @endif
    </div>
@else
    <div class="login">
        <a href="{{ url('login') }}">Đăng Nhập</a>
    </div>
@endif
