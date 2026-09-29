<?php
$host = "192.168.10.30";
$usuario = "postgres";
$senha = "21032010";
$banco = "manutencao";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);
?>