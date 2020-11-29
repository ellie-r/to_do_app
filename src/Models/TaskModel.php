<?php


namespace App\Models;


use phpDocumentor\Reflection\Types\Void_;

class TaskModel
{
    private  $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllTasks(): array
    {
        $query = $this->db->prepare('SELECT `id`, `name` FROM `tasks` WHERE `complete`=0 AND `deleted` = 0;');
        $query->execute();
        return $query->fetchAll();
    }

    public function getCompleteTasks(): array
    {
        $query = $this->db->prepare('SELECT `id`, `name` FROM `tasks` WHERE `complete`=1 AND `deleted` = 0;');
        $query->execute();
        return $query->fetchAll();
    }

    public function addNewTask($name)
    {
        $query = $this->db->prepare('INSERT INTO `tasks` (`name`) VALUES (?);');
        $query->execute([$name]);
    }

    public function markAsComplete(int $id): Void
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `complete` = 1 WHERE `id` = (?);');
        $query->execute([$id]);
    }

    public function markAsIncomplete(int $id): Void
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `complete` = 0 WHERE `id` = (?);');
        $query->execute([$id]);
    }

    public function deleteTask(int $id): Void
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `deleted` = 1 WHERE `id` = (?);');
        $query->execute([$id]);
    }
}