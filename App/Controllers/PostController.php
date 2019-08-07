<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;


class PostController extends Controller
{
    public function index()
    {
        View::render('posts/index.php');
    }

    public function create()
    {

    }
}