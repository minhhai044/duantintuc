@extends('layouts.master')

@section('title')
    Quản lý Sản phẩm
@endsection

@section('content')
    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div class="notification is-success">{{ $_SESSION['msg'] }}</div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif
    <div class="card">

        <div class="card-filter">
            
            <div class="field">

                <div class="control has-icons-left has-icons-right">
                    
                    <input class="input" id="table-search" type="text" placeholder="Search for records...">
                    <span class="icon is-left">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
            </div>
            <div class="field">
                <div class="select">
                    <select id="table-length">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>
                </div>
            </div>
            <div class="field has-addons">
                <p class="control">
                    <a class="button" href="{{ url('admin/posts/create') }}">
                        <span class="icon is-small">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span>Create Record</span>
                    </a>
                </p>
                {{-- <p class="control">
                    <a class="button" id="table-reload">
                        <span class="icon is-small">
                            <i class="fa fa-refresh"></i>
                        </span>
                        <span>Reload</span>
                    </a>
                </p> --}}
            </div>
        </div>
        <div class="card-content">
            <h2 style="font-size: 20px;margin-bottom:15px ">List Posts</h2>

            <table style="text-align: center" class="table is-hoverable is-bordered is-fullwidth" id="datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>View</th>
                        <th>Time Create</th>
                        <th>Time Update</th>
                        <th class="has-text-centered">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post['id'] }}</td>
                            <td>{{ $post['title'] }}</td>
                            <td>
                                <img src="{{ asset($post['img_post']) }}" width="100px" style="height: 80px" alt="">
                            </td>
                            <td>{{ $post['c_name'] }}</td>
                            <td>{{ $post['view'] }}</td>
                            <td>{{ $post['time_created'] }}</td>
                            <td>{{ $post['time_updated'] }}</td>
                            <td class="has-text-centered">
                                <div class="field is-grouped action">
                                    <p class="control">
                                        <a href="{{ url("admin/posts/{$post['id']}/show") }}"
                                            class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-list"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a href="{{ url("admin/posts/{$post['id']}/edit") }}"
                                            class="button is-rounded is-text">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a href="{{ url("admin/posts/{$post['id']}/delete") }}"
                                            onclick="return confirm('Chắc chắn xóa không?');"
                                            class="button is-rounded is-text action-delete" data-id="1">
                                            <span class="icon">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </a>
                                    </p>
                                </div>

                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
