<?php

$mysqli;

function abrirConexao(){
    $mysqli = new mysqli('localhost' , 'root' , '' , 'bdculture');

    $mysqli->query("SET NAMES 'utf8'");
    $mysqli->query('SET character_set_connection=utf8');
    $mysqli->query('SET character_set_client=utf8');
    $mysqli->query('SET character_set_results=utf8');

    if(mysqli_connect_error()){
        trigger_error(mysqli_connect_error());
    }else{
        return $mysqli;
    }
}

?>