<?php


namespace App\Factories;


use App\Controllers\DeleteTaskController;

class DeleteTaskControllerFactory
{
    public function __invoke($container)
    {
        return new DeleteTaskController($container->get('TaskModel'));
    }
}