<?php
include_once("../conexao.php");
if ($_POST["tabela"] == 'categoriacurso') {
    editaCategoria($_POST["idCategoria"], $_POST["nomeCategoria"]);
    header("Location: ../categoria/categoria_list.php");
} else if ($_POST["tabela"] == 'curso') {
    editaCurso($_POST["idCurso"], $_POST["nomeCurso"], $_POST["preco"], $_POST["idCategoria"]);
    header("Location: ../curso/curso_list.php");
}
function editaCategoria($idCategoria, $nomeCategoria)
{
    $conexao = conectaBD();
    $sql = "UPDATE  categoriacurso SET nomeCategoria = '{$nomeCategoria}' WHERE  idCategoria = '{$idCategoria}'";
    mysqli_query($conexao, $sql) or die(mysqli_error());
    echo "Editado com Sucesso!";
    desconectaBD($conexao);
}

function editaCurso($idCurso, $nomeCurso, $preco, $idCategoria)
{
    $conexao = conectaBD();
    $sql = "UPDATE  curso SET nomeCurso = '{$nomeCurso}', preco= '{$preco}', idCategoria='{$idCategoria}' WHERE  idCurso = '{$idCurso}'";
    mysqli_query($conexao, $sql) or die(mysqli_error());
    echo "Editado com Sucesso!";
    desconectaBD($conexao);
}
