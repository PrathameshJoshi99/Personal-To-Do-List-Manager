# Personal To-Do List Manager

## Overview

This is a simple yet efficient To-Do List Manager application that enables users to add tasks, mark them as completed, and delete them. The application also provides the option to view tasks, either all at once or filtered based on their completion status.

## Functional Features

- **Add Tasks:** Users can add new tasks with a description and an optional due date.
- **Mark as Completed:** Tasks can be marked as 'completed.'
- **Delete Tasks:** Users have the ability to delete tasks.
- **View Tasks:** The application allows users to view tasks in three ways: 
  - "Show all"
  - "Show completed"
  - "Show pending"

## Implementation Details

- **Behavioral Pattern:** The Memento Pattern is utilized to allow users to undo or redo actions.
- **Creational Pattern:** The Builder Pattern is employed for constructing tasks with optional attributes like due date or tags.
- **Object-Oriented Programming (OOP):** The project emphasizes encapsulation by keeping task data and methods together in a class.

## Usage

1. Clone this repository to your local machine.
2. Open `index.php` in your web browser to run the application.
3. You can add, mark as completed, and delete tasks using the provided interface.

## Project Structure

The project is structured as follows:

```plaintext
todo-list-manager/
  ├── index.php (Main entry point)
  ├── classes/
  │     ├── Task.php
  │     └── TaskBuilder.php
  ├── templates/
  │     ├── header.php
  │     ├── footer.php
  │     └── task_list.php
  ├── data/
  │     └── tasks.json (JSON file to store tasks)
