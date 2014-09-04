<?php

if(!isset($_SESSION['logado'])){
    header('location: ../../View/loginOut/login.php');
}

