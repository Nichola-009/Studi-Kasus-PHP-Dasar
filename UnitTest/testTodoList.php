<?php

require_once ("../Model/todoList.php");
require_once ("../BussinesLogic/showTodoList.php");

$todoList[1] = "Belajar PHP Dasar";
$todoList[2] = "Belajar PHP OOP";
$todoList[3] = "Belajar PHP Lanjutan";
showTodoList();