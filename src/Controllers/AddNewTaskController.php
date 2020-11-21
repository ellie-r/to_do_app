<?php


namespace App\Controllers;


use App\Models\TaskModel;

class AddNewTaskController
{
    private $taskModel;

    public function __construct($taskModel)
    {
        $this->taskModel = $taskModel;
    }

    public function __invoke($request, $response, $args)
    {
        $userData = $request->getParsedBody();
        $name = $userData['newTask'];
        $this->taskModel->addNewTask($name);
        return $response->withHeader('Location', '/');
    }
}