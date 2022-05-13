<?php

declare(strict_types=1);

namespace App\Controller;

class ProductController extends AbstractController
{
    public function list(): void
    {
        parent::render('product/list');
    }

    public function add(): void
    {
        parent::render('product/add');
    }
}
