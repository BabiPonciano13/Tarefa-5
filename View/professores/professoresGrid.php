<?php
include '../../Model/Classes/Professores.php';
include '../../Config/conexao.php';
include '../../public/header.php';
include '../../public/body.php';

$professor = new Professores($conexao);

$dados = $professor->fetchAll();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table class="table table-bordered table-hover" style="background-color: #c0c;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Turno</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados as $key => $row) :
                    ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['nome']; ?></td>
                        <td><?= $row['turno']; ?></td>
                        <td><a href="../../View/professores/professoresFormEditar.php?id=<?= $row['id'] ?>" class="btn btn-info">Editar</a></td>
                        <td><a href="../../Controller/professores/professoresDelete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Excluir</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="../../View/professores/professoresFormInserir.php" class="btn btn-success">Inserir</a>
    </body>
</html>

<?php
include '../../public/footer.php';