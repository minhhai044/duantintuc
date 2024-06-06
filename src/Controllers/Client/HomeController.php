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
        $posts = $this->post->all();
        $categories = $this->category->all();
        $this->renderViewClient('home', [
            'posts' => $posts,
            'categories' => $categories
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
        // Helper::debug($datadetails);
        $categories = $this->category->all();

        $this->renderViewClient('detail', [
            'categories' => $categories,
            'datadetails' => $datadetails
        ]);
    }
}
