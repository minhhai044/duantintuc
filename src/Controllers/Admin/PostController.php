<?php

namespace Minhhai\Duan\Controllers\Admin;

use Minhhai\Duan\Commons\Controller;
use Minhhai\Duan\Commons\Helper;
use Minhhai\Duan\Models\Category;
use Minhhai\Duan\Models\Post;
use Rakit\Validation\Validator;

class PostController extends Controller
{
    private Post $post;
    private Category $category;

    public function __construct()
    {
        $this->post = new Post();
        $this->category = new Category();
    }

    public function index()
    {
        $posts = $this->post->all();
        $this->renderViewAdmin('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        $categories = $this->category->all();
        // Helper::debug($categories);
        $categoryPluck = array_column($categories, 'name', 'id');

        $this->renderViewAdmin('posts.create', [
            'categoryPluck' => $categoryPluck
        ]);
    }

    public function store()
    {
        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'category_id'           => 'required',
            'title'                 => 'required|max:500',
            'excerpt'               => 'required|max:500',
            'content'               => 'required|max:65000',
            'img_post'              => 'uploaded_file:0,2048K,png,jpeg,jpg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/posts/create'));
            exit;
        } else {
            $data = [
                'category_id'       => $_POST['category_id'],
                'title'             => $_POST['title'],
                'excerpt'           => $_POST['excerpt'],
                'content'           => $_POST['content'],
                'account_id'        => $_SESSION['account']['id'],
            ];

            if (!empty($_FILES['img_post']) && $_FILES['img_post']['size'] > 0) {

                $from = $_FILES['img_post']['tmp_name'];
                $to   = 'assets/uploads/' . time() . $_FILES['img_post']['name'];
                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['img_post'] = $to;
                } else {
                    $_SESSION['errors']['img_post'] = 'Upload KHÔNG thành công!';

                    header('Location: ' . url('admin/posts/create'));
                    exit;
                }
            }
            if (!empty($_FILES['img_header']) && $_FILES['img_header']['size'] > 0) {

                $from = $_FILES['img_header']['tmp_name'];
                $to   = 'assets/uploads/' . time() . $_FILES['img_header']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['img_header'] = $to;
                } else {
                    $_SESSION['errors']['img_header'] = 'Upload KHÔNG thành công!';

                    header('Location: ' . url('admin/posts/create'));
                    exit;
                }
            }

            $this->post->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thêm mới thành công!';

            header('Location: ' . url('admin/posts'));
            exit;
        }
    }

    public function show($id)
    {
        $post = $this->post->findByID($id);

        $this->renderViewAdmin('posts.show', [
            'post' => $post
        ]);
    }

    public function edit($id)
    {
        $post = $this->post->findByID($id);
        $categories = $this->category->all();

        $categoryPluck = array_column($categories, 'name', 'id');

        $this->renderViewAdmin('posts.edit', [
            'post' => $post,
            'categoryPluck' => $categoryPluck,
        ]);
    }

    public function update($id)
    {
        $post = $this->post->findByID($id);

        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'category_id'           => 'required',
            'title'                 => 'required|max:500',
            'excerpt'               => 'required|max:500',
            'content'               => 'required|max:65000',
            'img_post'              => 'uploaded_file:0,2048K,png,jpeg,jpg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/posts/$id/edit"));
            exit;
        } else {
            $data = [
                'category_id'       => $_POST['category_id'],
                'title'             => $_POST['title'],
                'excerpt'           => $_POST['excerpt'],
                'content'           => $_POST['content'],
                'time_updated'      => date('Y-m-d H:i:s')
            ];

            if (!empty($_FILES['img_post']) && $_FILES['img_post']['size'] > 0) {

                $from = $_FILES['img_post']['tmp_name'];
                $to   = 'assets/uploads/' . time() . $_FILES['img_post']['name'];
                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['img_post'] = $to;
                } else {
                    $_SESSION['errors']['img_post'] = 'Upload KHÔNG thành công!';

                    header('Location: ' . url("admin/posts/$id/edit"));
                }
            }
            if (!empty($_FILES['img_header']) && $_FILES['img_header']['size'] > 0) {

                $from = $_FILES['img_header']['tmp_name'];
                $to   = 'assets/uploads/' . time() . $_FILES['img_header']['name'];
                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['img_header'] = $to;
                } else {
                    $_SESSION['errors']['img_header'] = 'Upload KHÔNG thành công!';

                    header('Location: ' . url("admin/posts/$id/edit"));
                }
            }

            $this->post->update($id, $data);

            if ($post['img_post'] && file_exists(PATH_ROOT . $post['img_post'])) {
                unlink(PATH_ROOT . $post['img_post']);
            }
            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url("admin/posts"));
            exit;
        }
    }

    public function delete($id)
    {
        try {
            $post = $this->post->findByID($id);

            $this->post->delete($id);

            if ($post['img_post'] && file_exists(PATH_ROOT . $post['img_post'])) {
                unlink(PATH_ROOT . $post['img_post']);
            }
            if ($post['img_header'] && file_exists(PATH_ROOT . $post['img_header'])) {
                unlink(PATH_ROOT . $post['img_header']);
            }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Xóa thành công!';
        } catch (\Throwable $th) {
            $_SESSION['status'] = false;
            $_SESSION['msg'] = 'Xóa KHÔNG thành công!';
        }

        header('Location: ' . url('admin/posts'));
        exit();
    }
}
