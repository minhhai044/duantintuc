<?php

namespace Minhhai\Duan\Controllers\Admin;

use Minhhai\Duan\Commons\Controller;
use Minhhai\Duan\Commons\Helper;
use Minhhai\Duan\Models\Comment;
use Minhhai\Duan\Models\Post;

class CommentController extends Controller
{
    private Post $post;
    private Comment $comment;
    public function __construct()
    {
        $this->post = new Post();
        $this->comment = new Comment();
    }
    public function index()
    {
        $posts = $this->post->all();

        $this->renderViewAdmin("comments.index", [
            "posts" => $posts,
        ]);
    }
    public function show($id)
    {
        $comments = $this->comment->findByIdPro($id);  
        $this->renderViewAdmin("comments.show", [
            "comments"=> $comments,
        ]);
    }
}
