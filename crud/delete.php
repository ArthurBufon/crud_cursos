<?php
include_once("../conexao.php");

if($_GET['tabela'] == 'categoriacurso'){
    deletaCategoria($_GET['idCategoria']);
    header("Location: ../categoria/categoria_list.php");
} else if($_GET['tabela'] == 'curso'){
    excluirProduto($_GET['idCurso']);
    header("Location: ../curso/curso_list.php");
}
function deletaCategoria($idCategoria){
    $conexao = conectaBD();
    $dados= "DELETE FROM categoriacurso 
            WHERE  idCategoria = '{$idCategoria}'";
    mysqli_query($conexao,$dados) or die(mysqli_error());
    $dados= "DELETE FROM curso 
            WHERE  idCategoria = '{$idCategoria}'";
    mysqli_query($conexao,$dados) or die(mysqli_error());
    echo "Excluído com Sucesso!";
    desconectaBD($conexao);
}

function excluirProduto($idCurso){
    $conexao = conectaBD();
    $dados= "DELETE FROM curso 
            WHERE  idCurso = '{$idCurso}'";
    mysqli_query($conexao,$dados) or die(mysqli_error());
    echo "Excluído com Sucesso!";
    desconectaBD($conexao);
}