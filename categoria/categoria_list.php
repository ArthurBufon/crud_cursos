<?php
session_start();
require '../conexao.php';
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

<div class="container mt-4">

    <?php include('../message.php'); ?>

    <div class="row">
        <h1 class="text-center">Listando todas as categorias</h1>
        <div class="col-md-12">
            <a href="../index.php" class="btn btn-danger float-end">VOLTAR</a>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoria</th>
                    <th colspan="2">Ação</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once("../conexao.php"); #chama o arquivo
                $conn = conectaBD();
                $sql = "SELECT idCategoria, nomeCategoria FROM categoriacurso";
                $resultado = mysqli_query($conn, $sql);

                while ($linha = mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                    <td><?php echo $linha['idCategoria']; ?></td>
                    <td><?php echo $linha['nomeCategoria']; ?></td>
                    <td><a class="btn btn-success" href="<?php echo "categoria_edit.php?idCategoria=" . $linha['idCategoria'] . "&nomeCategoria=" . $linha['nomeCategoria'] ?>">Alterar</a></td>
                    <td>
                        <a class="btn btn-danger" href="<?php echo "../crud/delete.php?idCategoria=" . $linha['idCategoria'] . "&tabela=categoriacurso" ?>">Excluir</a>
                    </td>

                </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>