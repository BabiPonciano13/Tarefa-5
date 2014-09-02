<?php

include '../../Model/Classes/Professores.php';
include '../../Config/conexao.php';
$professores = new Professores($conexao);
$professores->delete($_GET['id']);

header("Location: ../../View/professores/professoresGrid.php");