<?php


namespace App\Factories;


use App\Controllers\CompletedTasksPageController;

class CompletedTasksPageControllerFactory
{
    public function __invoke($container)
    {
        $renderer = $container->get('renderer');
        $taskModel = $container->get('TaskModel');
        return new CompletedTasksPageController($renderer, $taskModel);
    }
}