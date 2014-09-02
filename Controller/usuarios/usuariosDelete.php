<?php

include '../../Model/Classes/Usuarios.php';
include '../../Config/conexao.php';
$usuario = new Usuarios($conexao);
$usuario->delete($_GET['id']);

header("Location: ../../View/usuarios/usuariosGrid.php");