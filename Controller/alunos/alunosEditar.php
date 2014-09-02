<?php

include '../../Model/Classes/Alunos.php';
include '../../Config/conexao.php';

$aluno = new Alunos($conexao);
$aluno->update($_POST);


header("location: ../../View/alunos/alunosGrid.php");