<?php

$hostname = "localhost";
$banco = "banco_saas";
$user = "root";
$senha = "";

$con = new mysqli($hostname, $user, $senha, $banco);

if ($con->connect_errno) {
    die('Erro na conexão: ' . $con->connect_error);
} 