@extends('layouts.master')

@section('title')
    Xem chi tiết: {{ $post['name'] }}
@endsection

@section('content')
    <table class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>TRƯỜNG</th>
                <th>GIÁ TRỊ</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($post as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{!! $value !!}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
