@extends('layouts.master')

{{-- @section('title')
    Quản lý Sản phẩm
@endsection --}}

@section('content')
<section>
    
    <div class="container">
        <h1 class="editor-h1">Danh Sách</h1>
        <div class="articles">
            @foreach ($listcategory as $list)
                    <a href="" class="card">
                        <img src="../{{ $list['img_post'] }}" alt="">

                        <article>
                            <h1>{{ $list['title'] }}</h1>
                            <p>
                                {{ $list['excerpt'] }}
                            </p>
                        </article>
                    </a>
                @endforeach
        </div>
    </div>
</section>
@endsection