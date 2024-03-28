<?php

// Array voor de taken in elke sectie
$tasks = array(
    "To Do" => array("Task 1", "Task 2", "Task 3"),
    "Progress" => array(),
    "Done" => array()
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="container">
    <?php foreach ($tasks as $sectionName => $sectionTasks): ?>
        <div class="column">
            <h2><?php echo $sectionName; ?></h2>
            <ul class="task-list">
                <?php foreach ($sectionTasks as $task): ?>
                    <li class="task"><?php echo $task; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>

