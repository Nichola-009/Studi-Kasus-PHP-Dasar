<?php

require_once ("../Model/todoList.php");
require_once ("../BussinesLogic/addTodoList.php");

addTodoList("Nichola");
addTodoList("Saputra");

var_dump($todoList);