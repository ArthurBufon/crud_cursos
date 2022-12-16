<?php
session_start();
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Criando categoria</title>
</head>
<body>

<div class="container mt-5">

    <?php include('../message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Nova categoria
                        <a href="../index.php" class="btn btn-danger float-end">VOLTAR</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="../crud/create.php" method="POST">
                        <div class="mb-3 form-control">
                            <label>Categoria</label>
                            <input type="text" name="nomeCategoria" class="form-control">
                        </div>
                        <div class="mb-3 form-control">
                            <input class="btn btn-success" type="submit" value="Cadastrar">
                        </div>
                        <input type=hidden name="tabela" value="categoriacurso">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container mt-4">

    <?php include('../message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoria</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once("../conexao.php");
                $conn = conectaBD();
                $query = "SELECT * FROM categoriacurso";
                $resultado = mysqli_query($conn, $query);

                if(mysqli_num_rows($resultado) > 0)
                {
                    foreach($resultado as $categoria)
                    {
                        ?>
                        <tr>
                            <td><?= $categoria['idCategoria']; ?></td>
                            <td><?= $categoria['nomeCategoria']; ?></td>
                        </tr>
                        <?php
                    }
                }
                else
                {
                    echo "<h5> Nenhuma categoria cadastrada! </h5>";
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>