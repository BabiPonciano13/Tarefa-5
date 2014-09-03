<?php
include '../../Model/Classes/Usuarios.php';
include '../../Config/conexao.php';
include '../../public/header.php';
include '../../public/body.php';


$usuario = new Usuarios($conexao);

$dados = $usuario->fetchAll();
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
                        <th>Login</th>
                        <?php if ($_SESSION['admin'] and $_SESSION['admin_2'] == 'true'): ?>
                            <th>Senha</th>
                            <th>Permissão de Editar</th>
                            <th>Permissão de Excluir</th>
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
                            <td><?= $row['login']; ?></td>
                            <?php if ($_SESSION['admin'] and $_SESSION['admin_2'] == 'true'): ?>

                                <td><?= $row['senha']; ?></td>

                                <td>
                                    <?php if($row['admin']): ?>
                                    <img src="../../public/img/marcado.svg" width="50px" height="50px">
                                    <?php else: ;?>
                                        
                                        <img src="../../public/img/notchecked.png" width="50px" height="50px">
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($row['admin_2']): ?>
                                        <img src="../../public/img/marcado.svg" width="50px" height="50px">
                                    <?php else: ?>
                                        <img src="../../public/img/notchecked.png" width="50px" height="50px">
                                    <?php endif; ?>
                                </td>
                                <td><a href="../../View/usuarios/usuariosFormEditar.php?id=<?= $row['id'] ?>" class="btn btn-info">Editar</a></td>
                                <td><a href="../../Controller/usuarios/usuariosDelete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Excluir</a></td>
                            <?php endif; ?>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php if ($_SESSION['admin'] == 'true'): ?>

                <a href="../../View/usuarios/usuariosFormInserir.php" class="btn btn-success">Inserir</a>
            <?php endif; ?>

        </div>
    </body>
</html>

<?php
include '../../public/footer.php';
