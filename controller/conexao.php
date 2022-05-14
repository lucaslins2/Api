<?php

$hostName = "sql366.main-hosting.eu";
$bancoDeDados = "u683914129_Cantina";
$usuario = "u683914129_Admin";
$senha = "z7j?M$9Q#";

$mysqli = new mysqli($hostName,$usuario,$senha,$bancoDeDados);
if ($mysqli -> connect_errno){
    echo "Falha ao conectar: (" . $mysqli->connect_errno. ")" . $mysqli->connect_errno;
}

//mysqli_real_escape_string($conexao,'string sql');