<?php

require_once("../Model/todoList.php");
require_once ("../BussinesLogic/removeTodoList.php");
require_once ("../BussinesLogic/addTodoList.php");
require_once("../BussinesLogic/showTodoList.php");

addTodoList("Belajar OOP");
addTodoList("Belajar PHP Dasar");
addTodoList("Belajar PHP WEB");
addTodoList("Belajar JavaScript");
addTodoList("Belajar Monolid");


showTodoList();
removeTodoList(2);
showTodoList();




