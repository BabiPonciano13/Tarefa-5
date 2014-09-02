<?php
include '../../public/header.php';
include '../../public/body.php';
?>
<meta charset="UTF-8">
<div style="text-align: center"><h2>Cadastrar Usuário</h2></div>
<div class="col-md-11">
    <form action="../../Controller/usuarios/usuariosInserir.php" method="POST">
        <fieldset>

            <div class="form-group">
                <label for="inputLogin" class="col-sm-2 control-label">Login</label>
                <div class="col-sm-10">
                    <input type="text" name="login" class="form-control" id="inputLogin" placeholder="Login">
                </div>
            </div>

            <div class="form-group">
                <label for="inputSenha" class="col-sm-2 control-label">Senha</label>
                <div class="col-sm-10">
                    <input type="password" name="senha" class="form-control" id="inputSenha" placeholder="Senha">
                </div>
            </div>
            <div class="form-group">
                <label for="inputnivel_de_permissao" class="col-sm-2 control-label">Editar</label>
                <div class="col-sm-10">
                    <input type="checkbox" name="admin" />
                </div>
                <label for="inputnivel_de_permissao" class="col-sm-2 control-label">Excluir</label>
                <div class="col-sm-10">
                    <input type="checkbox" name="admin2" />
                </div>
            </div>
        </fieldset>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Enviar</button>
            </div>
        </div>

    </form>
</div>