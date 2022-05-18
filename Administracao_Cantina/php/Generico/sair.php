<?php
include_once 'iniciarSessao.php';

if(isset($_SESSION['logado'])){

    unset($_SESSION['logado'] );
    unset($_SESSION['urlEndereco']);

}
?>
<script>window.location.assign("index.php");</script>