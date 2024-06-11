@extends('layouts.master')

@section('title')
    Quản lý Sản phẩm
@endsection

@section('content')
    <div class="card">
        <div class="card-content">
            <h2 style="font-size: 20px;margin-bottom:15px ">List Comments</h2>
            <table style="text-align: center" class="table is-hoverable is-bordered is-fullwidth" id="datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Content</th>
                        <th>Name User</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                    <tr>
                        <td>{{$comment['id']}}</td>
                        <td>{{$comment['content']}}</td>
                        <td>{{$comment['nameuser']}}</td>
                        <td>{{date('d/m/Y H:i:s' , strtotime( $comment['time_created'])) }}</td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
