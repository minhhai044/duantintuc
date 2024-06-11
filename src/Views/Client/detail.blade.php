@extends('layouts.master')
@section('title')
    Chi Tiết Bài Viết
@endsection
@section('content')
    @php
        function getCa($e)
        {
            switch ($e) {
                case '3':
                    $tt = 'Thể thao';
                    break;
                case '4':
                    $tt = 'Giải trí';
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
                    <div>
                        <i class="fas fa-user fa-1x"></i> Viết bởi <span style="color: red">{{ $acc['name'] }}</span>
                        {{date('d/m/Y H:i:s' , strtotime( $datadetails['time_created'])) }}

                    </div>
                    <p class="entertainment-category">{{ getCa($datadetails['category_id']) }}</p>
                </div>
                <p>{{ $datadetails['excerpt'] }}</p>
                <p>{{ $datadetails['content'] }}</p>
            </article>

            <article class="lienhe">
                <h3>Liên hệ ngay</h3>
                <ul>
                    <li><a href="https://www.facebook.com/profile.php?id=100041666683033">Facebook</a></li>
                    <li><a href="https://discord.gg/PU5YvwnK">Discord</a></li>
                    <li><a href="https://www.tiktok.com/@m.hai.04">Tiktok</a></li>
                    <li><a href="https://www.instagram.com/m.haijr_/">Instagram</a></li>      
                </ul>
            </article>

            <article>
                <h3>Tham gia câu lạc bộ của chúng tôi</h3>
                <p>Hãy tham gia câu lạc bộ của chúng tôi để có được những thông tin hữu ích nhé!</p>
                <a href="https://www.facebook.com/profile.php?id=100041666683033">Tham gia ngay</a>
            </article>
        </section>
    </div>
    <div class="container">
        <h3>Bình luận</h3>
        <section class="article-page-binhluan">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr class="table-danger">
                        <th style="width: 50%;">Nội dung</th>
                        <th>Người bình luận</th>
                        <th>Thời gian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listComment as $comment)
                        <tr class="table-success">
                            <td style="width: 50%;">{{ $comment['content'] }}</td>
                            <td>{{ $comment['nameuser'] }}</td>
                            <td>{{date('d/m/Y H:i:s' , strtotime( $comment['time_created'])) }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </section>
        @if (!empty($_SESSION['errComment']))
            <div>

                @foreach ($_SESSION['errComment'] as $err)
                    <div style="width: 300px;" class="alert alert-danger">
                        {{ $err }}
                    </div>
                @endforeach
                @php
                    unset($_SESSION['errComment']);
                @endphp

            </div>
        @endif
        @if (!empty($_SESSION['account']))
            <section class="article-page-binhluan2">
                <form action="{{ url('comment') }}" method="post">

                    <input type="hidden" name="post_id" value="{{ $datadetails['id'] }}">
                    <input type="hidden" name="account_id" value="{{ $_SESSION['account']['id'] }}">
                    <div style="display:flex;">
                        <input type="text" style="width:400px;" name="content" class="form-control"
                            id="formGroupExampleInput" placeholder="Nhập bình luận">
                        <input type="submit" class="btn btn-success" value="Gửi bình luận">
                    </div>
                </form>
            </section>
        @endif

    </div>
    {{-- Bình Luận --}}
@endsection
