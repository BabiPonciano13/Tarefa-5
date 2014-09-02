<?php

include '../../Model/Classes/Alunos.php';
include '../../Config/conexao.php';
$aluno = new Alunos($conexao);
$aluno->delete($_GET['id']);

header("Location: ../../View/alunos/alunosGrid.php");