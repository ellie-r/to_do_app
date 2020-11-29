<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'HomePageController');
    $app->post('/addNewTask', 'AddNewTaskController');
    $app->post('/markAsComplete/{id}', 'MarkAsCompleteController');
    $app->get('/markAsIncomplete/{id}', 'MarkAsIncompleteController');
    $app->get('/completeTasks', 'CompletedTasksPageController');
    $app->post('/deleteTask/{id}', 'DeleteTaskController');
};
