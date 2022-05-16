<?php
include_once 'iniciarSessao.php';

if(isset($_SESSION['logado'])){

    unset($_SESSION['logado'] );

}
?>
<script>window.location.assign("index.php");</script>