<?php

    require_once("../conexao.php");

    //$extraQuery = $tipo ? "WHERE p.tipo1 = '$tipo' OR p.tipo2 = '$tipo'" : "";

    $sqlTipos = "SELECT p.tipo1,
                    p.tipo2 
            FROM pokemon p 
            WHERE p.tipo1 IS NOT NULL OR p.tipo2 IS NOT NULL";
    

        $resultTipos = $conexao->query($sqlTipos);
        $arrayTipos = array();

        while($listTipos = $resultTipos->fetch_assoc()){
            array_push($arrayTipos, $listTipos);
        }
        $retorno["item"] = $arrayTipos;

        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
        exit($json);

?>