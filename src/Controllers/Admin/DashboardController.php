<?php

namespace Minhhai\Duan\Controllers\Admin;

use Minhhai\Duan\Commons\Controller;
use Minhhai\Duan\Commons\Helper;
use Minhhai\Duan\Models\Category;
use Minhhai\Duan\Models\Post;

class DashboardController extends Controller
{
    private Category $category;
    private Post $post;
    public function __construct(){
        $this->category = New Category();
        $this->post = new Post();
    }
    public function dashboard(){
        $datas = $this->post->dashboardCategory();
        $this->renderViewAdmin('dashboard',[
            'datas'=>$datas
        ]);
    }
}
