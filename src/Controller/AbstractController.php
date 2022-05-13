<?php

namespace App\Controller;

abstract class AbstractController
{
    public function render(string $viewName): void
    {
        include '../views/_templates/head.phtml';
        include "../views/{$viewName}.phtml";
        include '../views/_templates/footer.phtml';
    }
}
