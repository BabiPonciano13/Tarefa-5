<?php

include '../../Model/Classes/Professores.php';
include '../../Config/conexao.php';

$professor = new Professores($conexao);
$professor->update($_POST);


header("location: ../../View/professores/professoresGrid.php");