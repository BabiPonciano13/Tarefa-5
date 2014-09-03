<!DOCTYPE html>
<meta charset="UTF-8">
<?php
include '../../Config/conexao.php';

include '../Controller/loginOut/verifica.php';
$login = $_POST['email'];
$senha = $_POST['senha'];

//if (isset($_POST['email']) && isset($_POST['senha'])) {
$stmt = $conexao->prepare("SELECT * FROM usuarios WHERE login = :email  AND  senha = md5(:senha)");
$stmt->bindParam(':email', strtoupper($login), PDO::PARAM_STR);
$stmt->bindParam(':senha', strtoupper($senha), PDO::PARAM_STR);
$stmt->execute();

session_start();

//if (isset($_POST['email']) && isset($_POST['senha'])) {
//var_dump($_POST);
if ($row = $stmt->fetch(PDO::FETCH_OBJ)) {

    $_SESSION['email'] = $row->login;
    $_SESSION['senha'] = $row->senha;
    $_SESSION['logado'] = TRUE;
    $_SESSION['admin'] = $row->admin;
    $_SESSION['admin_2'] = $row->admin_2;

    header("location: ../../View/cursoAlpha/cursoAlpha.php");
} else {
    echo '<script>alert("Usuário ou senha incorreto!")</script>';
    echo '<script>window.location.replace("../../View/loginOut/login.php")</script>';
}