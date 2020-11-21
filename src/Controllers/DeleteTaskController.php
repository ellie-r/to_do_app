<?php


namespace App\Controllers;


use App\Models\TaskModel;

class DeleteTaskController
{
    private $taskModel;

    public function __construct($taskModel)
    {
        $this->taskModel = $taskModel;
    }

    public function __invoke($request, $response, $args)
    {
        $this->taskModel->deleteTask($args['id']);
        return $response->withHeader('Location', '/completeTasks');
    }
}