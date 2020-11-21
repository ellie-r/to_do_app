<?php


namespace App\Controllers;


use App\Abstracts\Models\TaskModel;

class CompletedTasksPageController
{
    private $renderer;
    private $taskModel;

    public function __construct($renderer, $taskModel)
    {
        $this->renderer = $renderer;
        $this->taskModel = $taskModel;
    }

    public function __invoke($request, $response, $args)
    {
        $completeTasks = ['completedTasks' => $this->taskModel->getCompleteTasks()];
        return $this->renderer->render($response, "completedTasks.php", $completeTasks);
    }
}