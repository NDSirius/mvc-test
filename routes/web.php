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
        'controller' => 'PostController',
        'action' => 'index'
    ]
);
$router->add(
    'posts/create',
    [
        'controller' => 'PostController',
        'action' => 'create'
    ]
);
