<?php
session_start();
require 'conexao.php';
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD PHP</title>
</head>
<body>

<div class="container mt-4 text-center">

    <?php include('message.php'); ?>
    <h1>X-Cursos</h1>
    <h7>A sua plataforma de cursos online</h7>


    <div class="card align-items-center mx-auto mt-3" style="width: 35rem;">
        <img src="https://becode.com.br/wp-content/uploads/2017/09/php-post-1.png" class="card-img-top" alt="...">
        <div class="card-body">
            <div class="container">
                <a href="categoria/categoria_create.php" class="btn btn-primary mt-2">Nova Categoria</a>
                <a href="categoria/categoria_list.php" class="btn btn-primary mt-2">Lista Categorias</a>
            </div>
            <div class="container">
                <a href="curso/curso_create.php" class="btn btn-success mt-2">Novo Curso</a>
                <a href="curso/curso_list.php" class="btn btn-success mt-2">Lista Cursos</a>
            </div>
        </div>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>