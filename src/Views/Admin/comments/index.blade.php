@extends('layouts.master')

@section('title')
    Quản lý Bình Luận
@endsection

@section('content')
    <div class="card">
        <div class="card-content">
        <h2 style="font-size: 20px; ">List Title Posts Comment</h2>
        </div>
        
        @foreach ($posts as $post)
        {{-- <form action="{{url('admin/comment')}}" method="POST">
            <input type="hidden" value="{{$post['id']}}">
        </form> --}}
        <div style="margin: 5px 0px ; padding: 0px 25px">
            <table  class="table is-hoverable is-bordered is-fullwidth">

                    <thead>
                        <tr>
                            <th style="width: 100%;">{{$post['title']}}</th>
                            <td style="float: right"><a href="{{url("admin/comments/{$post['id']}/show")}}"><button class="button is-primary is-dark">Show</button></a></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        </tr>
                    </tbody>
            </table>
        </div>
        @endforeach

    </div>
@endsection
