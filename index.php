<?php
require_once 'classes/Task.php';
require_once 'classes/TaskBuilder.php';

session_start();

// Load tasks from JSON or initialize an empty array
$tasks = [];
if (file_exists('data/tasks.json')) {
    $tasks = json_decode(file_get_contents('data/tasks.json'), true);
}

// Handle user actions (Add, Mark as Completed, Delete)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'add') {
            $taskBuilder = new TaskBuilder($_POST['description'], $_POST['due_date']);
            $task = $taskBuilder->build();
            $tasks[] = $task;
        } elseif ($_POST['action'] === 'complete') {
            $taskName = $_POST['task_name'];
            foreach ($tasks as &$task) {
                if ($task['name'] === $taskName) {
                    $task['completed'] = true;
                }
            }
        } elseif ($_POST['action'] === 'delete') {
            $taskName = $_POST['task_name'];
            $tasks = array_filter($tasks, function ($task) use ($taskName) {
                return $task['name'] !== $taskName;
            });
        }

        // Save tasks back to the JSON file
        file_put_contents('data/tasks.json', json_encode($tasks));
    }
}

include 'templates/header.php';

// Display task list
include 'templates/task_list.php';

include 'templates/footer.php';
?>
