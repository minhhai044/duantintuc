@extends('layouts.master')

@section('content')
    @php
        function getCa($e)
        {
            switch ($e) {
                case '3':
                    $tt = 'Thể thao';
                    break;
                case '4':
                    $tt = 'Công nghệ';
                    break;
                case '5':
                    $tt = 'Giáo dục';
                    break;
                case '6':
                    $tt = 'Sức khỏe';
                    break;
                case '7':
                    $tt = 'Pháp luật';
                    break;
            }
            return $tt;
        }
    @endphp
    <div class="container">
        <section class="article-page">
            <article>
                <h3 style="">{{ $datadetails['title'] }}</h3>
                <img style="margin-top: 6px;" src="../{{ $datadetails['img_post'] }}" alt="">
                <div>
                    <p>
                        <i class="fas fa-user fa-1x"></i> Viết bởi XYZ {{ $datadetails['time_created'] }}
                    </p>
                    <p class="entertainment-category">{{ getCa($datadetails['category_id']) }}</p>
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
