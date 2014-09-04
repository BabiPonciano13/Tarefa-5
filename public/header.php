<?php
include '../../Controller/loginOut/verifica.php';
//session_start();

if (!$_SESSION['logado']) {
    header("location: ../../View/loginOut/login.php");
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Curso Alpha </title>
        <link rel="shortcut icon" href="/public/img/sasokaEm.png" />
        <!--<link rel="shortcut icon" href="logo.png" />-->

        <link href="../../public/css/bootstrap.min.css" rel="stylesheet">

        <script src="../../public/js/jquery.min.js"></script>

        <script src="../../public/js/bootstrap.min.js"></script>
        
    </head>
    
        
