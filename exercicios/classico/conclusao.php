<?php
session_start();
//Importantes
$numJaFeitos = $_SESSION['numJaFeitos'] + 1;
$resposta = $_POST['resposta'];

 //Pontos
if(isset($resposta)){
    if($resposta == 1){
        echo '<script language="javascript">';
        echo 'alert("Parabens! Você acertou a ultima questão!!!")';
        echo '</script>';
        $_SESSION['acertos']++;
    }else{
        echo '<script language="javascript">';
        echo 'alert("Que Pena!!!, você errou a ultima pergunta.")';
        echo '</script>';
    }
}

//Conexao com o DB
include "../../php/conexao.php";

//Dados do Usuario
$nome          = $_SESSION["nomeUsuario"];
$usuarioID     = $_SESSION['usuarioID'];
$email         = $_SESSION['emailUsuario'];
$level         = $_SESSION['levelUsuario'];
$pontos        = $_SESSION['pontosEx'];
$pontosRanking = $_SESSION['pontosRanking'];
$ultimaData    = $_SESSION['ultimaDataLogada'];
$dinheiro      = $_SESSION['dinheiroUsuario'];


$acertos  = $_SESSION['acertos'];  

$materia = $_SESSION['materia'];

    $pontos        = $_SESSION['pontosEx'] + ($acertos * 10);
    $pontosRanking = $_SESSION['pontosRanking'] + ($acertos * 10);
    $dinheiro      = $_SESSION['dinheiroUsuario'] + ($acertos * 10);
    
    include "../../php/proxLevel.php";
    if($pontos > $proxLevel[$level]){
      $levelAntigo = $level;
      $pontosAntigo = $pontos;
      $pontos = $pontos - $proxLevel[$level];
      $level++;
    }else{}

    if($materia <> 0){

    $sql = "UPDATE Usuario
    SET pontosEx = $pontos , pontosRanking = $pontosRanking, dinheiroUsuario = $dinheiro, levelUsuario = $level
    WHERE usuarioID = $usuarioID;";

    $_SESSION['numJaFeitos'] = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
    $_SESSION['acertos'] = '';
    $_SESSION['materia'] = '';
    unset($_SESSION['numJaFeitos']);
    unset($_SESSION['acertos']);
    unset($_SESSION['materia']);
    unset($_SESSION['jaFeitos']);


    $retorno = mysqli_query($conn,$sql)or die ('Erro na consulta ::. '. mysqli_error($conn));
    
    $_SESSION['levelUsuario'] = $level;
    $_SESSION['pontosEx'] = $pontos;
    $_SESSION['pontosRanking'] = $pontosRanking;
    $_SESSION['dinheiroUsuario'] = $dinheiro;

    }else{
      session_unset(); 
      session_destroy();
      echo '<script language="javascript">';
      echo 'alert("ERROR")';
      echo '</script>';
      header('Location: /');

    }

    mysqli_close($conn);  
?>
<html>
<head>
  <link rel="icon" href="../../img/LOGOBrowser.png">
  <title>Conclusão - Exercicios</title>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="../../css/mainStyle.css">
    <link rel="stylesheet" type="text/css" href="/css/signin.css">

</head>
<body>
<center>
  <form class='form-signin' method='POST'>
      <a href='/'><img class='mb-4' src='/img/LOGOBrowser.png' alt='' width='100' height='100'></a>
      <h1 class='h3 mb-5 font-weight-normal'>Você acabou os exercicios</h1>
      <p>Você teve <?php
      if(!isset($acertos)){$acertos = 0;}else{}
      echo "$acertos acertos de " .  ($numJaFeitos - 1) . " exercicios"; ?><br>
      Você obteve : <br><br>
      - Experiencia: <?php echo ($acertos * 10) ?><br>
      - Pontos de Ranking: <?php echo ($acertos * 10) ?><br>
      - Dinheiro: <?php echo ($acertos * 10) ?>
      <?php 
      if($pontosAntigo > $proxLevel[$levelAntigo]) {
        echo "<br>- Nivel: $level";
      }
       ?>
      </p>
      <a href='/' class='mt-4 btn btn-lg btn-primary btn-block cadButao' type='submit' style='height: auto;'>Voltar para a Home</a>
      <p class='mt-5 mb-3 text-muted'>&copy; 2018</p>
  </form>
<center>
</body>
</html>