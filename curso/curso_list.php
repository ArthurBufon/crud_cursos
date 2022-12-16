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
        <h1 class="text-center">Listando todos os cursos</h1>
        <div class="col-md-12">
            <a href="../index.php" class="btn btn-danger float-end">VOLTAR</a>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Curso</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th colspan="2">Ação</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once("../conexao.php"); #chama o arquivo
                $conn = conectaBD();
                $sql = "SELECT curso.idCurso, curso.nomeCurso, curso.preco, curso.idCategoria, categoria.nomeCategoria as categorianome FROM curso curso join categoriacurso categoria on categoria.idCategoria = curso.idCategoria";
                $resultado = mysqli_query($conn, $sql);

                while ($linha = mysqli_fetch_assoc($resultado)) {
                    ?>
                    <tr>
                        <td><?php echo $linha['idCurso']; ?></td>
                        <td><?php echo $linha['nomeCurso']; ?></td>
                        <td><?php echo $linha['preco']; ?></td>
                        <td><?php echo $linha['categorianome']; ?></td>
                        <td><a class="btn btn-success" href="<?php echo "curso_edit.php?idCurso=" . $linha['idCurso'] . "&nomeCurso=" . $linha['nomeCurso'] . "&preco=" . $linha['preco'] . "&categorianome=" . $linha['categorianome'] ?>">Alterar</a></td>
                        <td><a class="btn btn-danger" href="<?php echo "../crud/delete.php?idCurso=" . $linha['idCurso'] . "&tabela=curso" ?>">Excluir</a></td>
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