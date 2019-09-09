<?php
session_start();
	$nome = $_SESSION["nomeUsuario"];
	$usuarioID = $_SESSION['usuarioID'];
	$email = $_SESSION['emailUsuario'];
	$level = $_SESSION['levelUsuario'];
	$pontos = $_SESSION['pontosEx'];
	$pontosRanking = $_SESSION['pontosRanking'];
	$ultimaData = $_SESSION['ultimaDataLogada'];
	$dinheiro = $_SESSION['dinheiroUsuario'];
	$admin = $_SESSION['adminUsuario'];

	include "../php/conexao.php";

$sql = "SELECT pontosRanking, nomeUsuario FROM Usuario ORDER BY pontosRanking DESC";
$result = mysqli_query($conn,$sql);

if(!$result){
  echo 'SQL Query Failed';
}else{

  $rank = 0;
  $last_score = false;
  $rows = 0;

  while($row = mysqli_fetch_array($result)){
    $rows++;
    if($last_score!= $row['pontosRanking']){
      $last_score = $row['pontosRanking'];
      $rank = $rows;
    }
    echo ("rank ".$rank." é ".$row['nomeUsuario']." com ".$row['pontosRanking']." pontos<br>");
  }
}
?>