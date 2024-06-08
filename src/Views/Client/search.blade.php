@extends('layouts.master')

{{-- @section('title')
    Quản lý Sản phẩm
@endsection --}}

@section('content')
    <section>

        <div class="container">
            <h1 class="editor-h1">Danh Sách Tìm Kiếm</h1>
            <div class="articles">
                @foreach ($datas as $data)
                    <a href="{{ url("detail/{$data['id']}") }}" class="card">
                        <img src="{{ $data['img_post'] }}" style=" height:200px" alt="">
                        <article>
                            <h4 style="margin-top: 10px">{{ $data['title'] }}</h4>
                            <p>
                                {{ $data['excerpt'] }}
                            </p>
                            <p class="view">Lượt xem : {{$data['view']}}</p>
                        </article>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
