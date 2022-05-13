<?php

declare(strict_types=1);

namespace App\Controller;

class UserController extends AbstractController
{
    public function add(): void
    {
        parent::render('/user/add');
    }   

    public function list(): void
    {
        parent::render('/user/list');
    }
}