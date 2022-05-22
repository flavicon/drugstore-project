<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;
use App\Model\User;

class UserController extends AbstractController
{
    public function add(): void
    {
        parent::render('/user/add');
    }   

    public function list(): void
    {
        $con = Connection::open();

        $data = $con->getRepository(User::class)->findAll();

        parent::render('/user/list', $data);
    }
}