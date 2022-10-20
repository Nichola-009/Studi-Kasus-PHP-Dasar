<?php

require_once ("../View/viewAddTodoList.php");
require_once ("../BussinesLogic/addTodoList.php");
require_once ("../BussinesLogic/showTodoList.php");


addTodoList("Nichola");
addTodoList("Saputra");
viewAddTodoList();
showTodoList();