<?php

require_once ("../BussinesLogic/addTodoList.php");
require_once ("../Model/todoList.php");
require_once ("../BussinesLogic/showTodoList.php");
require_once ("../View/viewRemoveTodoList.php");

addTodoList("Nichola");
addTodoList("Nichola");

showTodoList();

viewRemoveTodoList();

showTodoList();