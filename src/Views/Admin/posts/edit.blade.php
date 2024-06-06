@extends('layouts.master')

@section('title')
    Cập nhật Người dùng: {{ $post['name'] }}
@endsection

@section('content')
    <div class="card-content">
        <p class="title is-4"> Edit Post </p>
        @if (!empty($_SESSION['errors']))
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
        @endif
        <form action="{{ url("admin/posts/{$post['id']}/update") }}" enctype="multipart/form-data" method="POST">
            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                    <input class="input" value="{{ $post['title'] }}" name="title" type="text"
                        placeholder="Text Title">
                </div>
            </div>
            <div class="field">
                <label class="label">Excerpt</label>
                <div class="control">
                    <input class="input" value="{{ $post['excerpt'] }}" name="excerpt" type="text"
                        placeholder="Text Excerpt">
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
                <img src="{{ asset($post['img_header']) }}" style="margin-top: 10px" width="100px" alt="">
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
                <img src="{{ asset($post['img_post']) }}" style="margin-top: 10px" width="100px" alt="">

            </div>
            <div class="field">
                <label class="label">Category</label>
                <div class="control">
                    <div class="select">
                        <select name="category_id">
                            @foreach ($categoryPluck as $id => $name)
                                <option @if ($post['category_id'] == $id) selected @endif value="{{ $id }}">
                                    {{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Content</label>
                <div class="control">
                    <textarea name="content" class="textarea" placeholder="Content">{{ $post['content'] }}</textarea>
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
    {{-- 

    <form action="{{ url("admin/posts/{$post['id']}/update") }}" enctype="multipart/form-data" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="category_id" class="form-label">Category:</label>
        
                    <select name="category_id" id="category_id" class="form-select">
                        @foreach ($categoryPluck as $id => $name)
                            <option 
                                @if ($post['category_id'] == $id)
                                    selected
                                @endif
                                value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{ $post['name'] }}" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="img_thumbnail" class="form-label">Img Thumbnail:</label>
                    <input type="file" class="form-control" id="img_post" placeholder="Enter img_thumbnail" name="img_post">
                    <img src="{{ asset($post['img_post']) }}" width="100px" alt="">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="overview" class="form-label">Overview:</label>
                    <textarea class="form-control" id="overview" placeholder="Enter overview" name="overview">{{ $post['overview'] }}</textarea>
                </div>

                <div class="mb-3 mt-3">
                    <label for="content" class="form-label">Content:</label>
                    <textarea class="form-control" id="content" rows="4" placeholder="Enter content" name="content">{{ $post['content'] }}</textarea>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button> --}}
    {{-- </form> --}}
@endsection
