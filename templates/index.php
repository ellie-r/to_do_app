<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>To Do</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/d8f8b9f853.js" crossorigin="anonymous"></script>
    <link href="/css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h2>Add new Task</h2>
    <div class="addTask">
        <form  action="/addNewTask" method="post">
            <label for="newTask">Add New Task</label>
            <input type="text" id="newTask" name="newTask">
            <input type="submit" value="Submit">
        </form>
    </div>

    <h2>My Tasks</h2>
    <ul class="tasks">
    <?php
        foreach($tasks as $task) {
            echo '<li>
                       <form method="post" action="/markAsComplete/' . $task['id'] . '">
                            <input class="completeBox" type="submit" value =" ">
                       </form><p>'
                        . $task['name'] .
                  '</p></li>';
        };

    ?>
    </ul>
</body>
</html>
