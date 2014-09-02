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
        <table class="table table-bordered table-hover" style="background-color: #c0c;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Login</th>
                    <th>Senha</th>
                    <th>Editar</th>
                    <th>Excluir</th><!--
                    <th>Numero</th> 
                    <th>Professores</th>-->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados as $key => $row) :
                    ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['login']; ?></td>
                        <td><?= $row['senha']; ?></td>
                        <td><a href="../../View/usuarios/usuariosFormEditar.php?id=<?= $row['id'] ?>" class="btn btn-info">Editar</a></td>
                        <td><a href="../../Controller/usuarios/usuariosDelete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Excluir</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="../../View/usuarios/usuariosFormInserir.php" class="btn btn-success">Inserir</a>
    </body>
</html>

<?php
include '../../public/footer.php';