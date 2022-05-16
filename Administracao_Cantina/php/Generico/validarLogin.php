<?php

include_once '../../controller/conexao.php';
include_once 'iniciarSessao.php';

if(isset($_POST['login']) && isset($_POST['password'])){

    $login = mysqli_real_escape_string($mysqli,$_POST['login']);
    $senha = mysqli_real_escape_string($mysqli,$_POST['password']);

    $query          = "SELECT login FROM login WHERE login = '$login' AND senha = '$senha' ";
    $resultado      = mysqli_query($mysqli,$query);
    $existeLogin    = mysqli_num_rows($resultado);

    if($existeLogin > 0){

        $_SESSION['logado'] = true;

    }else{

        unset($_SESSION['logado']);
        
        ?>
        
        <script>erroPadrao2('Acesso negado','Login ou senha incorreto!')</script>
        
        <?php
    }
}    
else{

    unset($_SESSION['logado']);

    ?>

    <script>erroPadrao2('Acesso negado','Você precisa preencher o campo de login e senha!')</script>

    <?php
}
