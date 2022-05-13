<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

use App\Controller\CategoryController;
use App\Controller\ProductController;
use App\Controller\ErrorController;
use App\Controller\IndexController;

$url = $_SERVER['REQUEST_URI'];

match($url) {
    '/' => (new IndexController)->home(),
    '/listar-categoria' => (new CategoryController())->list(),
    '/novo-categoria' => (new CategoryController())->add(),
    '/listar-produtos' => (new ProductController())->list(),
    '/novo-produto' => (new ProductController())->add(),
    default => (new ErrorController())->notFound(),
};
