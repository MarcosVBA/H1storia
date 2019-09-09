<?php

$servidor = 'localhost';
$usuario = 'id6266042_admin';
$senhadb = 'password';
$database = 'id6266042_h1storia';

$conn = new mysqli($servidor, $usuario, $senhadb, $database);
  
if(!$conn){
    echo "ERRO";
    exit;
}
?>