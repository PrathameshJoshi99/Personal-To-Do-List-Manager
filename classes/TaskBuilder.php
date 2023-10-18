<?php
class TaskBuilder
{
    private $name;
    private $dueDate;

    public function __construct($name, $dueDate = null)
    {
        $this->name = $name;
        $this->dueDate = $dueDate;
    }

    public function build()
    {
        return new Task($this->name, $this->dueDate);
    }
}
?>
