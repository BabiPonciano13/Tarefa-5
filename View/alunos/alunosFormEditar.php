<?php

include '../../Model/Classes/Professores.php';
include '../../Model/Classes/Alunos.php';
include '../../Config/conexao.php';
include '../../public/header.php';
include '../../public/body.php';
include '../../Controller/loginOut/somenteAdmin.php';


$professor = new Professores($conexao);
$alunos = new Alunos($conexao);
$dados = $alunos->find($_GET['id']);
$dados2 = $professor->fetchAll();
//$stmt = $conexao->prepare(" select * from professores ");
//$stmt->execute();
//$dados = $stmt->fetchAll(PDO::FETCH_OBJ);
?>


<meta charset="UTF-8">
<div style="text-align: center"><h2>Editar Alunos Cadrastados</h2></div>
<div class="col-md-11">
    <form action="../../Controller/alunos/alunosEditar.php" method="POST">
        <fieldset>

            <div class="form-group">
                <!--                <label for="inputid" class="col-sm-2 control-label">id</label>-->
                <div class="col-sm-10">
                    <input type="hidden" name="id" class="form-control" id="inputid" placeholder="id" value="<?= $dados['id']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control" id="inputNome" placeholder="Nome" value="<?= $dados['nome']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputCPF" class="col-sm-2 control-label">CPF</label>
                <div class="col-sm-10">
                    <input type="text" name="cpf"  class="form-control" id="inputCPF" placeholder="CPF" value="<?= $dados['cpf']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEstado" class="col-sm-2 control-label">Estado</label>
                <div class="col-sm-10">
                    <input type="text" name="estado" class="form-control" id="inputEstado" placeholder="Estado" value="<?= $dados['estado']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputNumero" class="col-sm-2 control-label">Numero</label>
                <div class="col-sm-10">
                    <input type="text" name="numero" class="form-control" id="inputNumero" placeholder="Numero" value="<?= $dados['numero']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputprofessores" class="col-sm-2 control-label">Professores</label>
                <div class="col-sm-10">
                    <select name="professores">
                        <?php foreach ($dados2 as $key => $row) : ?>
                            <option <?php
                            if ($row['id'] == $dados['prof_id']) {
                                echo 'selected';
                            }
                            ?> value="<?php echo $row['id']; ?>"><?= $row['nome'] ?></option>

                        <?php endforeach; ?>
                    </select>
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







