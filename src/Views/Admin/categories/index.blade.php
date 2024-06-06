@extends('layouts.master')

@section('title')
    Quản lý Sản phẩm
@endsection

@section('content')
    <div class="card">
        <div class="card-content">
            <table class="table is-hoverable is-bordered is-fullwidth" id="datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category['id']}}</td>
                        <td>{{$category['name']}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
