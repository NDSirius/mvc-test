<?php

$router->add(
    '',
    [
        'controller' => 'home',
        'action' => 'index'
    ]
);

$router->add(
    'posts',
    [
        'controller' => 'PostsController',
        'action' => 'index'
    ]
);
$router->add(
    'posts/create',
    [
        'controller' => 'PostsController',
        'action' => 'create'
    ]
);
