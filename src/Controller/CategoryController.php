<?php

declare(strict_types=1);

namespace App\Controller;

class CategoryController extends AbstractController
{
    public function list(): void
    {
        parent::render('category/list');
    }

    public function add(): void
    {
        parent::render('category/add');
    }
}