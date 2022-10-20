<?php

function showTodoList()
{
    global $todoList;

    echo "TODOLIST". PHP_EOL;

    foreach($todoList as $number => $key)
    {
        echo "$number . $key" . PHP_EOL;
}
}