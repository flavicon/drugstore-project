<?php

declare(strict_types=1);

namespace App\Controller;

class ErrorController extends AbstractController
{
    public function notFound(): void
    {
        parent::render('error/notFound');
    }
}
