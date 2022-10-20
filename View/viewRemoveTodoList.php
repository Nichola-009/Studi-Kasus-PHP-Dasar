<?php

require_once __DIR__. ("/../Helper/Input.php");
require_once __DIR__. ("/../BussinesLogic/removeTodoList.php");
function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO". PHP_EOL;


    $pilihan = input("Hapus(x untuk batal)");

    if ($pilihan == "x") {
        echo "Batal Untuk Menghapus" . PHP_EOL;
    } else 
    {
        $success = removeTodoList($pilihan);
        if ($success)
        {
            echo "Sukses Menghapus Todo List". PHP_EOL;
        } else 
        {
            echo "Gagal Menghapus Todo List". PHP_EOL;
        } 

            
        
    }
}