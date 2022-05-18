<?php
include_once 'iniciarSessao.php';

if($_GET['urlEndereco'] == "Generico/sair.php"){
    $_SESSION['urlEndereco'] = 'Generico/php/login.php';
}else{
    $_SESSION['urlEndereco'] = $_GET['urlEndereco'];
}