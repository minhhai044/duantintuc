<?php

namespace Minhhai\Duan\Controllers\Client;

use Minhhai\Duan\Commons\Controller;
use Minhhai\Duan\Commons\Helper;
use Minhhai\Duan\Models\Category;
use Minhhai\Duan\Models\Post;

class HomeController extends Controller
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
            'datadetails' => $datadetails
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
}
