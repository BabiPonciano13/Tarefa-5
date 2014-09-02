<?php

include '../../Model/Classes/Usuarios.php';
include '../../Config/conexao.php';

$usuario = new Usuarios($conexao);

$_POST['admin'] = $_POST['admin'] ? true : false;
$_POST['admin2'] = $_POST['admin2'] ? true : false;
$usuario->insert($_POST);
 
header("Location: ../../View/usuarios/usuariosGrid.php");
