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

    <title>Editando curso</title>
</head>
<body>

<div class="container mt-5">

    <?php include('../message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Editando curso
                        <a href="../index.php" class="btn btn-danger float-end">VOLTAR</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="../crud/update.php" method="POST">
                        <div class="mb-3 form-control">
                            <label>ID</label>
                            <input value="<?php echo $_GET['idCurso'] ?>" readonly type="number" name="idCurso" class="form-control">
                        </div>
                        <div class="mb-3 form-control">
                            <label>Curso</label>
                            <input value="<?php echo $_GET['nomeCurso'] ?>" type="text" name="nomeCurso" class="form-control">
                        </div>
                        <div class="mb-3 form-control">
                            <label>Preço</label>
                            <input value="<?php echo $_GET['preco'] ?>" type="number" name="preco" class="form-control">
                        </div>
                        <div class="mb-3 form-control">
                            <label>Categoria</label>
                            <select name="idCategoria">
                                <?php
                                include_once("../conexao.php"); #chama o arquivo
                                $conn = conectaBD();
                                $sql = "SELECT `idCategoria`, `nomeCategoria` FROM `categoriacurso`";
                                $resultado = mysqli_query($conn, $sql);

                                while ($linha = mysqli_fetch_assoc($resultado)) {
                                    ?>

                                    <option value="<?php echo $linha['idCategoria']; ?>"> <?php echo $linha['nomeCategoria'] ?></option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3 form-control">
                            <input class="btn btn-primary" type="submit" value="Editar">
                        </div>
                        <input type=hidden name="tabela" value="curso">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>