<div class="task-list">
    <h2>Task List</h2>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php echo $task['name']; ?>
                - <?php echo $task['completed'] ? 'Completed' : 'Pending'; ?>
                <?php if ($task['dueDate']) : ?>
                    , Due: <?php echo $task['dueDate']; ?>
                <?php endif; ?>
                <form method="post" action="index.php">
                    <input type="hidden" name="action" value="complete">
                    <input type="hidden" name="task_name" value="<?php echo $task['name']; ?>">
                    <button type="submit">Mark as Completed</button>
                </form>
                <form method="post" action="index.php">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="task_name" value="<?php echo $task['name']; ?>">
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
