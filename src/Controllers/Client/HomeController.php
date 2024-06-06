<?php

namespace Minhhai\Duan\Controllers\Client;

use Minhhai\Duan\Commons\Controller;
use Minhhai\Duan\Commons\Helper;
use Minhhai\Duan\Models\Post;

class HomeController extends Controller
{
    private Post $post;
    public function __construct(){
        $this->post = new Post();
    }
    public function index() {
        $posts = $this->post->all();
        $this->renderViewClient('home',[
            'posts'=> $posts
        ]);
    }
}