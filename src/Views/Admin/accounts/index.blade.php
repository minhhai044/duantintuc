@extends('layouts.master')

@section('title')
    Quản lý Tài khoản
@endsection

@section('content')
    <div class="card">
        <div class="card-content">
            <table style="text-align: center" class="table is-hoverable is-bordered is-fullwidth" id="datatable">
                <thead >
                    <tr >
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Update role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataAccs as $dataAcc)
                    <tr>
                        <td>{{$dataAcc['id']}}</td>
                        <td>{{$dataAcc['name']}}</td>
                        <td>{{$dataAcc['email']}}</td>
                        <td>{{ $dataAcc['role'] === 0 ? 'User' : 'Admin'  }}</td>
                        <td style="width:200px">
                            <button class="button is-primary is-outlined">
                               <a class="has-text-primary" href="{{ url("admin/accounts/{$dataAcc['id']}/editaccount")}}"><span>Update</span></a>
                              </button>
                            <button class="button is-danger is-outlined">
                                <span>Delete</span>
                                <span class="icon is-small">
                                  <i class="fas fa-times"></i>
                                </span>
                              </button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
