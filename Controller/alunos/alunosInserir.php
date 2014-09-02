<?php
include '../../Model/Classes/Alunos.php';
include '../../Config/conexao.php';

$aluno = new Alunos($conexao);
$aluno->insert($_POST);

header("Location: ../../View/alunos/alunosGrid.php");
