<?php


namespace App\Factories;


use App\Controllers\MarkAsIncompleteController;

class MarkAsIncompleteControllerFactory
{
    public function __invoke($container)
    {
        return new MarkAsIncompleteController($container->get('TaskModel'));
    }
}