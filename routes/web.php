<?php

$router->add(
    '',
    [
        'controller' => 'Home',
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
$router->add(
    'posts/store',
    [
        'controller' => 'PostsController',
        'action' => 'store'
    ]
);

$router->add(
    'posts/{id:\d+}',
    [
        'controller' => 'PostsController',
        'action' => 'show'
    ]
);

