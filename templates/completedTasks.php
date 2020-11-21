<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>To Do</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d8f8b9f853.js" crossorigin="anonymous"></script>
    <link href="/css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1>Let's get shit done!</h1>
<h2>Completed Tasks</h2>
<ul>
<?php
foreach($completedTasks as $task) {
    echo '<li>
            <form method="post" action="/markAsUnComplete/' . $task['id'] . '">
                 <input class="completeBox complete" type="submit" value =" ">
            </form>
            <p>'
                . $task['name'] . '
            </p>
            <form class="deleteTask" method="post" action="/deleteTask/' . $task['id'] . '">
                 <input class="deleteBox" type="submit" value ="Delete">
            </form>
          </li>';
}
?>
</ul>
<footer>
    <a href="https://iconscout.com/icons/check" target="_blank">Check Icon</a> by <a href="https://iconscout.com/contributors/feathericons">Feather Icons</a> on <a href="https://iconscout.com">Iconscout</a>
</footer>
</body>
</html>
