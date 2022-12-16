<?php
include_once("../conexao.php");


if($_POST["tabela"] == 'categoriacurso'){
    salvaCategoria($_POST["nomeCategoria"]);
    header("Location: ../categoria/categoria_list.php");
} else if($_POST["tabela"] == 'curso'){
    salvaCurso($_POST["nomeCurso"], $_POST["preco"], $_POST["idCategoria"]);
    header("Location: ../curso/curso_list.php");
}
function salvaCategoria($nomeCategoria){
    $conexao = conectaBD();
    $dados= "INSERT INTO categoriacurso(nomeCategoria) VALUES ('{$nomeCategoria}')";
    mysqli_query($conexao,$dados) or die(mysqli_error());
    echo "Cadastro com Sucesso!";
    return ($conexao);
    desconectaBD($conexao);
}

function salvaCurso($nomeCurso, $preco, $idCategoria){
    $conexao = conectaBD();
    $dados= "INSERT INTO curso (nomeCurso, preco, idCategoria) VALUES ('{$nomeCurso}', {$preco}, {$idCategoria})";
    mysqli_query($conexao,$dados) or die(mysqli_error());
    echo "Cadastro com Sucesso!";
    desconectaBD($conexao);
}
