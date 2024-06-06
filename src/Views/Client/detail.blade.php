@extends('layouts.master')

@section('content')
    <div class="container">
        <section class="article-page">
        <article>
                <img src="../{{ $datadetails['img_post'] }}" alt="">
                <h2>{{ $datadetails['title'] }}</h2>
                <div>
                    <p>
                        <i class="fas fa-user fa-1x"></i> Viết bởi XYZ {{$datadetails['time_created']}}
                    </p>
                    <p class="entertainment-category">{{ $datadetails['category_id'] }}</p>
                </div>
                <p>{{ $datadetails['excerpt'] }}</p>
                <p>{{ $datadetails['content'] }}</p>
        </article>
        
        <article>
            <h3>Tin tức liên quan</h3>
            <ul>
                <li>Thể Thao</li>
                <li>Giải Trí</li>
                <li>Công Nghệ</li>
                <li>Thời Trang</li>
                <li>Mua Sắm</li>
            </ul>
        </article>

        <article>
            <h3>Tham gia câu lạc bộ của chúng tôi</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, id?</p>
            <a href="#">Tham gia ngay</a>
        </article>
    </section>
    </div>
@endsection
