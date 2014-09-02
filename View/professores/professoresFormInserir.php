<?php

include '../../public/header.php';
include '../../public/body.php';


?>

<meta charset="UTF-8">
<div style="text-align: center"><h2>Cadastrar Professor</h2></div>
<div class="col-md-11">
    <form action="../../Controller/professores/professoresInserir.php" method="POST">
        <fieldset>
           
            <div class="form-group">
                <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control" id="inputNome" placeholder="Nome">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputTurno" class="col-sm-2 control-label">Turno</label>
                <div class="col-sm-10">
                    <input type="text" name="turno" class="form-control" id="inputTurno" placeholder="Turno">
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