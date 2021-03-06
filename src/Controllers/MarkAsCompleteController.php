<?php


namespace App\Controllers;




class MarkAsCompleteController
{
    private $taskModel;

    public function __construct($taskModel)
    {
        $this->taskModel = $taskModel;
    }

    public function __invoke($request, $response, $args)
    {
        $this->taskModel->markAsComplete($args['id']);
        return $response->withHeader('Location', '/');
    }
}