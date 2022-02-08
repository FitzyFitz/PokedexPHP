<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";

    $banco = "pokedex";
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if (mysqli_connect_errno()){
        trigger_errr((mysqli_connect_error()));
        exit();
    }

    mysqli_set_charset($conexao, 'utf8');

?>