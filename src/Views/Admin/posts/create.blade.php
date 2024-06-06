@extends('layouts.master')

@section('title')
    Thêm mới Sản phẩm
@endsection

@section('content')
    <div class="card-content">
        <p class="title is-4"> Create New </p>
        @if (!empty($_SESSION['errors']))
            <div class="notification is-danger">
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
        <form action="{{ url('admin/posts/store') }}" enctype="multipart/form-data" method="post">
            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                    <input class="input" name="title" type="text" placeholder="Text Title">
                </div>
            </div>
            <div class="field">
                <label class="label">Excerpt</label>
                <div class="control">
                    <input class="input" name="excerpt" type="text" placeholder="Text Excerpt">
                </div>
            </div>
            <div class="field">
                <div class="file is-primary">

                    <label class="file-label">
                        <input class="file-input" name="img_header" type="file">
                        <span class="file-cta">
                            <span class="file-icon">
                                <i class="fa fa-upload"></i>
                            </span>
                            <span class="file-label">
                                Image header
                            </span>

                        </span>
                    </label>
                </div>
            </div>

            <div class="field">
                <div class="file is-primary">
                    <label class="file-label">
                        <input class="file-input" type="file" name="img_post">
                        <span class="file-cta">
                            <span class="file-icon">
                                <i class="fa fa-upload"></i>
                            </span>
                            <span class="file-label">
                                Image post
                            </span>
                        </span>
                    </label>
                </div>
            </div>
            <div class="field">
                <label class="label">Category</label>
                <div class="control">
                    <div class="select">
                        <select name="category_id">
                            @foreach ($categoryPluck as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Content</label>
                <div class="control">
                    <textarea name="content" class="textarea" placeholder="Content"></textarea>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-link">Submit</button>
                </div>
                <div class="control">
                    <button class="button is-text"><a href="{{ url('admin/posts') }}">Cancel</a></button>
                </div>
            </div>
        </form>
    </div>
@endsection
