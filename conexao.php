<?php

$servername = "localhost";
$database = "upf_crud_trabalho";
$username = "root";
$password = "";
$conexao= mysqli_connect($servername, $username, $password, $database);
#realiza a conexão com o banco de dados mysql
function conectaBD(){
    $servername = "localhost";
    $database = "upf_crud_trabalho";
    $username = "root";
    $password = "";

    // criar conexão
    $conexao= mysqli_connect($servername, $username, $password, $database);
    //print_r($conexao);
    if(!$conexao){
        die("Conexão falhou! ".mysqli_connect_error());
    }else{
        echo "Conexão realizada!";
    }
    return ($conexao);
}

function desconectaBD($conexao){
    mysqli_close($conexao);
}