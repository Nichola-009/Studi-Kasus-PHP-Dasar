<?php

require_once ("../View/viewShowTodoList.php");
require_once("../BussinesLogic/addTodoList.php");

addTodoList("Nichola");
addTodoList("Saputra");
addTodoList("Koen Iku");
viewShowTodoList();