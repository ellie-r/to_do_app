<?php


namespace App\Factories;


use App\Controllers\HomePageController;


class HomePageControllerFactory
{

    public function __invoke($container)
    {
        $renderer = $container->get('renderer');
        $taskModel = $container->get('TaskModel');
        return new HomePageController($renderer, $taskModel);
    }
}