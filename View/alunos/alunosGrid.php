<?php
include '../../Model/Classes/Alunos.php';
include '../../Config/conexao.php';
include '../../public/header.php';
include '../../public/body.php';

$clientes = new Alunos($conexao);

$dados = $clientes->fetchAll();
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
                    <th>CPF</th>
                    <th>Estado</th>
                    <th>Numero</th> 
                    <th>Professores</th>
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
                        <td><?= $row['cpf']; ?></td>
                        <td><?= $row['estado']; ?></td>
                        <td><?= $row['numero']; ?></td>
                        <td><?= $row['prof_id']; ?></td>
                        <td><a href="../../View/alunos/alunosFormEditar.php?id=<?= $row['id'] ?>" class="btn btn-info">Editar</a></td>
                        <td><a href="../../Controller/alunos/alunosDelete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Excluir</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="../../View/alunos/alunosFormInserir.php" class="btn btn-success">Inserir</a>
    </body>
</html>

<?php
include '../../public/footer.php';