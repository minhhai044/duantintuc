@extends('layouts.master')

@section('title')
    Danh Mục
@endsection

@section('content')
<section>
    
    <div class="container">
        <h1 class="editor-h1">Danh Sách</h1>
        <div class="articles">
            @foreach ($listcategory as $list)
                    <a href="{{url("detail/{$list['id']}")}}" class="card">
                        <img src="../{{ $list['img_post'] }}" style=" height:200px" alt="">

                        <article>
                            <h4 style="margin-top: 10px">{{ $list['title'] }}</h4>
                            <p>
                                {{ $list['excerpt'] }}
                            </p>
                            <p class="view">Lượt xem : {{$list['view']}}</p>
                        </article>
                    </a>
                @endforeach
        </div>
    </div>
</section>
@endsection