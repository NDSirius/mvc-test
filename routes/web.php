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


