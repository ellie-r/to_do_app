<?php


namespace App\Controllers;


use App\Abstracts\Models\TaskModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class HomePageController
{
    private $renderer;
    private $taskModel;

    public function __construct($renderer, $taskModel)
    {
        $this->renderer = $renderer;
        $this->taskModel = $taskModel;
    }

    public function __invoke( $request, $response,  $args)
    {
        $tasks = ['tasks' => $this->taskModel->getAllTasks()];

        return $this->renderer->render($response, "index.php", $tasks);
    }


}