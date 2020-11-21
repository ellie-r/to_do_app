<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>To Do</title>
    <link href="https://fonts.googleapis.com/css2?family=Gupter&family=Jost&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d8f8b9f853.js" crossorigin="anonymous"></script>
    <link href="/css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<h2>Completed Tasks</h2>
<ul>
<?php
foreach($completedTasks as $task) {
    echo '<li>
            <form class="" method="post" action="/markAsUnComplete/' . $task['id'] . '">
                 <input class="completeBox complete" type="submit" value =" ">
            </form>
            <p>'
                . strtoupper($task['name']) . '
            </p>
            <form class="deleteTask" method="post" action="/deleteTask/' . $task['id'] . '">
                 <input class="deleteBox button" type="submit" value ="x">
            </form>
          </li>';
}
?>
</ul>
<footer>
    <a href="https://iconscout.com/icons/check" target="_blank">Check Icon</a> by <a href="https://iconscout.com/contributors/feathericons" target="_blank">Feather Icons</a>
</footer>
</body>
</html>
