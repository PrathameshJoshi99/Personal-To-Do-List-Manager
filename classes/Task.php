<?php
class Task
{
    private $name;
    private $dueDate;
    private $completed;

    public function __construct($name, $dueDate = null)
    {
        $this->name = $name;
        $this->dueDate = $dueDate;
        $this->completed = false;
    }

    // Getters and setters for Task properties

    public function markCompleted()
    {
        $this->completed = true;
    }
}
?>
