<?php

require_once __DIR__. ("/Model/todoList.php");
require_once __DIR__. ("/BussinesLogic/addTodoList.php");
require_once __DIR__. ("/BussinesLogic/removeTodoList.php");
require_once __DIR__. ("/BussinesLogic/showTodoList.php");
require_once __DIR__. ("/View/viewAddTodoList.php");
require_once __DIR__. ("/View/viewRemoveTodoList.php");
require_once __DIR__. ("/View/viewShowTodoList.php");
require_once __DIR__. ("/Helper/Input.php");


viewShowTodoList();
?>