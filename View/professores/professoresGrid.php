<?php
include '../../Model/Classes/Professores.php';
include '../../Config/conexao.php';
include '../../public/header.php';
include '../../public/body.php';
//include '../../Controller/loginOut/somenteAdmin.php';
include '../../Controller/loginOut/somenteUsuario.php';


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
        <div class="col-md-12">
            <table class="table table-bordered table-hover" style="background-color: #935D69;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Turno</th>
                        <?php if ($_SESSION['admin'] and $_SESSION['admin_2'] == 'true'): ?>
                            <th>Editar</th>
                            <th>Excluir</th>
                        <?php endif; ?>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados as $key => $row) :
                        ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <td><?= $row['nome']; ?></td>
                            <td><?= $row['turno']; ?></td>
                            <?php if ($_SESSION['admin'] and $_SESSION['admin_2'] == 'true'): ?>
                                <td><a href="../../View/professores/professoresFormEditar.php?id=<?= $row['id'] ?>" class="btn btn-info">Editar</a></td>
                                <td><a href="../../Controller/professores/professoresDelete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Excluir</a></td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php if ($_SESSION['admin'] or $_SESSION['admin_2'] == 'true'): ?>

                <a href="../../View/professores/professoresFormInserir.php" class="btn btn-success">Inserir</a>
            <?php endif; ?>

        </div>
    </body>
</html>

<?php
include '../../public/footer.php';
