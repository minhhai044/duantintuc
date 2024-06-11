<?php

namespace Minhhai\Duan\Controllers\Client;

use Minhhai\Duan\Commons\Controller;
use Minhhai\Duan\Commons\Helper;
use Minhhai\Duan\Models\Account;
use Minhhai\Duan\Models\Category;
use Minhhai\Duan\Models\Comment;
use Minhhai\Duan\Models\Post;
use Rakit\Validation\Validator;

class HomeController extends Controller
{
    private Post $post;
    private Category $category;
    private Account $account;
    private Comment $comment;
    public function __construct()
    {
        $this->post = new Post();
        $this->category = new Category();
        $this->account = new Account();
        $this->comment = new Comment();
    }
    public function index()
    {
        $_SESSION['page'] = 1;
        [$data, $totalPage] = $this->post->paginate();
        $categories = $this->category->all();
        $this->renderViewClient('home', [
            'posts' => $data,
            'categories' => $categories,
            'totalPage' => $totalPage
        ]);
    }
    public function paginate($id)
    {
        $_SESSION['page'] = $id;
        [$data, $totalPage] = $this->post->paginate($page = $id);
        $categories = $this->category->all();
        $this->renderViewClient('home', [
            'posts' => $data,
            'categories' => $categories,
            'totalPage' => $totalPage
        ]);
    }
    public function listcategory($id)
    {
        $categories = $this->category->all();

        $listcategory = $this->post->findByCategory($id);
        // Helper::debug($listcategory);

        $this->renderViewClient('category', [
            'categories' => $categories,
            'listcategory' => $listcategory
        ]);
        // Helper::debug($listcategory);
    }
    public function detail($id)
    {
        $datadetails = $this->post->findByID($id);
        $acc = $this->account->findByID($datadetails['account_id']);
        $listComment = $this->comment->findByIdPro($id);
        $view = $datadetails['view'] + 1;
        $categories = $this->category->all();
        $data = [
            'view' => $view,
        ];

        // Update the post's view count
        $this->post->update($id, $data);

        // Render the detail view with categories and post details
        $this->renderViewClient('detail', [
            'categories' => $categories,
            'datadetails' => $datadetails,
            'acc' => $acc,
            'listComment' => $listComment
        ]);
    }
    public function about()
    {
        $categories = $this->category->all();

        $this->renderViewClient('about', [
            'categories' => $categories
        ]);
    }
    public function search()
    {

        $kyw = $_POST['kyw'];
        $categories = $this->category->all();
        $datas =  $this->post->searchKey($kyw);
        $_SESSION['kyw'] = $datas;
        $this->renderViewClient('search', [
            'datas' => $datas,
            'categories' => $categories

        ]);
    }
    public function comment()
    {

        $validator = new Validator;

        // make it
        $validation = $validator->make($_POST, [
            'content'              => 'required|min:10',
        ]);

        // then validate
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errComment'] = $validation->errors()->firstOfAll();
            header('location: ' . url('detail/' . $_POST['post_id']));
            
            exit;
        } else {
            $data = [
                'content' => $_POST['content'],
                'post_id' => $_POST['post_id'],
                'account_id' => $_POST['account_id'],
                'nameuser' => $_SESSION['account']['name'],
            ];
        }
        $this->comment->insert($data);
        header('location: ' . url('detail/' . $_POST['post_id']));
    }
}
