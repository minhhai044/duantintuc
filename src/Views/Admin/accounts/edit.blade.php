@extends('layouts.master')

@section('title')
    Cập nhật Người dùng
@endsection

@section('content')
    <div class="card-content">
        <p class="title is-4">Update Role</p>
        {{-- @if (!empty($_SESSION['errors']))
            <div class="alert alert-warning">
                <ul>
                    @foreach ($_SESSION['errors'] as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @php
                unset($_SESSION['errors']);
            @endphp
        @endif

        @if (isset($_SESSION['status']) && $_SESSION['status'])
            <div class="alert alert-success">{{ $_SESSION['msg'] }}</div>

            @php
                unset($_SESSION['status']);
                unset($_SESSION['msg']);
            @endphp
        @endif --}}
        <form action="{{ url("admin/accounts/{$editFormAcc['id']}/update") }}" method="POST">
            <div class="control">
                <div class="field">
                    <label class="label">Role hiện tại :</label>
                    <div class="control">
                        <input style="border: 1px solid black" class="input" value="<?php echo ($editFormAcc['role'] === 0) ? 'User' : 'Admin'; ?>" type="text" disabled>
                    </div>
                </div>
                <label class="radio">
                    <input type="radio" name="role" value="0" <?php echo ($editFormAcc['role'] === 0) ? 'checked' : ''; ?> />
                    User
                </label> <br>
                <label class="radio">
                    <input type="radio" name="role" value="1" <?php echo ($editFormAcc['role'] === 1) ? 'checked' : ''; ?> />
                    Admin
                </label>
            </div>
            <button style="margin-top:10px" onclick="return confirm('Chắc chắn update không?');" type="submit" class="button is-link is-outlined">Update</button>
            <button style="margin-top:10px; " class="button is-primary is-outlined"><a style="color:rgb(14, 187, 144)" href="{{url('admin/accounts')}}">List account</a></button>
        </form>
    </div>
@endsection
