<?php

class AbstractController
{
    public function render(string $viewName): void
    {
        echo "{$viewName}";
    }
}
