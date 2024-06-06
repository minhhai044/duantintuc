<?php

namespace Minhhai\Duan\Controllers\Admin;

use Minhhai\Duan\Commons\Controller;
use Minhhai\Duan\Models\Category;

class CategoryController extends Controller
{
    private Category $category;
    public function __construct()
    {
        $this->category = new Category();
    }
    public function index()
    {
        $categories = $this->category->all();
        $this->renderViewAdmin("categories.index", ["categories" => $categories]);
    }
}
