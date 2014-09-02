<?php
include '../../Model/Classes/Professores.php';
include '../../Config/conexao.php';

$professor = new Professores($conexao);
$professor->insert($_POST);

header("Location: ../../View/professores/professoresGrid.php");