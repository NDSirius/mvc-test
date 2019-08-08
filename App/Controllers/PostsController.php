<?php

namespace App\Controllers;

use App\Models\Post;
use Core\Controller;
use Core\View;


class PostsController extends Controller
{
    public function index()
    {
        View::render('posts/index.php');
    }

    public function create()
    {
        View::render('posts/create.php');
    }

    public function store()
    {
        if (empty($_POST['title'])) {
            $this->validation = false;
            $this->data = [
                'data' => $_POST,
                'title_error' => 'You must fill the title!'
            ];
        }

        if (!$this->validation) {
            View::render('posts/create.php', $this->data);
        }

        $modelData = [
            'title' => $_POST['title'],
            'content' => !empty($_POST['content']) ? $_POST['content'] : ''
        ];
        $post = new Post();
        $postId = $post->insert($modelData);

        http_redirect('posts/' . $postId);
    }
    public function show(int $id)
    {
        $postModel = new Post();
        $post = $postModel->getPost($id);

        View::render('posts/show.php', $post);
    }
}