<?php

require_once __DIR__. ("/../Helper/Input.php");
require_once __DIR__. ("/../BussinesLogic/addTodoList.php");
require_once __DIR__. ("/../Model/todoList.php");

function viewAddTodoList ()
{
    echo "MENAMBAHkAN TODO LIST". PHP_EOL;

    $todo = input("Todo (x untuk kembali)");

    if ($todo == "x")
    {

    } else
    {
        addTodoList($todo);
    }
    
}