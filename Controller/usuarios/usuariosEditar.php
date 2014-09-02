<?php

include '../../Model/Classes/Usuarios.php';
include '../../Config/conexao.php';


$usuario = new Usuarios($conexao);
$usuario->update($_POST);



header("location: ../../View/usuarios/usuariosGrid.php");

