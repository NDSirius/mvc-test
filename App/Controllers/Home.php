<?php

namespace App\Controllers;

use Core\Controller;
use \Core\View;

class Home extends Controller
{
    public function index()
    {
        View::render('home/index.php');
    }
}