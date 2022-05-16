<?php
include_once 'iniciarSessao.php';

if(isset($_SESSION['logado']) == true){
    ?>
    <script>trocarDePagina('Generico/logado.php');</script>
    <?php

}else{
    ?>
    <script>trocarDePagina('Generico/login.php');</script>
    <?php
}