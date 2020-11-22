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
    <section class="section">
        <div class="addTask">
            <form  action="/addNewTask" method="post">
                <label for="newTask">Add New Task</label>
                <input type="text" id="newTask" name="newTask">
                <input class="button" type="submit" value="Submit">
            </form>
        </div>
    </section>
    <section class="section">
        <h2>My Tasks</h2>
        <ul class="tasks">
        <?php
            foreach($tasks as $task) {
                echo '<li>
                           <form method="post" action="/markAsComplete/' . $task['id'] . '">
                                <input class="completeBox incomplete" type="submit" value =" ">
                           </form><p>'
                            . strtoupper($task['name']) .
                      '</p></li>';
            };

        ?>
        </ul>
    </section>
    <form method="get" action="/completeTasks">
        <input class="button" type="submit" value ="View Complete Tasks">
    </form>
<footer>
    <div>
        <a href="https://iconscout.com/icons/circle" target="_blank">Circle Icon</a> by <a href="https://iconscout.com/contributors/daniel-bruce">Daniel Bruce</a> on <a href="https://iconscout.com">Iconscout</a>
    </div>
    <div>
        <a href="https://iconscout.com/icons/check" target="_blank">Check Icon</a> by <a href="https://iconscout.com/contributors/feathericons" target="_blank">Feather Icons</a>
    </div>
</footer>
</body>
</html>
