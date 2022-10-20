<?php

require_once __DIR__. ("/../Model/todoList.php");
require_once __DIR__. ("/../BussinesLogic/showTodoList.php");
require_once __DIR__. ("/../View/viewAddTodoList.php");
require_once __DIR__. ("/../View/viewRemoveTodoList.php");
require_once __DIR__. ("/../View/viewShowTodoList.php");
require_once __DIR__. ("/../Helper/Input.php");

function viewShowTodoList()
{
    
    while(true) {
    showTodoList();
    echo "MENU". PHP_EOL;
    echo "1. Tambah Todo". PHP_EOL;
    echo "2. Hapus Todo". PHP_EOL;
    echo "x. Keluar Todo". PHP_EOL;

    $pilihan = input("Pilih");
    if ($pilihan == "1")
    {
        viewAddTodoList();
    } else if ($pilihan == "2")
    {
        viewRemoveTodoList();
    } else if ($pilihan == "x")
    {
        break;
    } else 
    {
        echo "Pilihan Tidak Di Ketahui" . PHP_EOL;
    }
}
    echo "Sampai Jumpa Bro" .PHP_EOL;

}