<?php

    // Se nao ha variavel chamada  __CONFIG__. nao carregara esse arquivo
    if (!defined('__CONFIG__')) {
        exit ('Voce nao tem um config');
    }

    //config ficara aqui

    //Include DB.php file

    include_once "classes/DB.php";

    $con = DB::getConnection();
    
?> 