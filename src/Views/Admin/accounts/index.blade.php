@extends('layouts.master')

@section('title')
    Quản lý Tài khoản
@endsection

@section('content')
    <div class="card">
        <div class="card-content">
            <table class="table is-hoverable is-bordered is-fullwidth" id="datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataAccs as $dataAcc)
                    <tr>
                        <td>{{$dataAcc['id']}}</td>
                        <td>{{$dataAcc['name']}}</td>
                        <td>{{$dataAcc['email']}}</td>
                        <td>{{$dataAcc['role']}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
