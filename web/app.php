<?php
require '../vendor/autoload.php';
require '../Router.php';

$router = new Router();
$router->get('/post/new', 'PostController::new');
$router->get('/posts', 'PostController::index');

$router->post('/post', 'PostController::add');

$router->_404('ErrorController::_404');

$view = $router->dispatch();
$view->render();
