<?php
include "../php/conexao.php";
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
	$erro = $_SESSION['loginErro'];

if($admin == 0 || !isset($usuarioID)){
	  		header("Location: ../");
	}

//Importantes
$alphabet = array("a","b","c","d","e","f");
$ALPHABET = array("A","B","C","D","E","F");

$pergunta  = $_POST["pergunta"];
$numAlt    = $_SESSION["numAlt"];
$materiaID = $_SESSION["materiaID"];
for ($i=0; $i < $numAlt; $i++) { 
  $letra = $alphabet[$i];
  ${$letra} = $_POST[$letra];
}
for ($i=0; $i < $numAlt; $i++) { 
  $letra = $alphabet[$i];
  $valor = $_POST['check_' . $letra];
  if (!isset($valor)) {
    ${'check_' . $letra} = 0;
  }else{
    ${'check_' . $letra} = 1;
  }
}
   
$consulta = ("SELECT * FROM Exercicios WHERE perguntaExe = '$pergunta'");
$queryConsulta = mysqli_query($conn,$consulta);
$numRegistros = mysqli_num_rows($queryConsulta);
if($numRegistros == 0)
{   

    $sql = "INSERT INTO Exercicios (materiaID, perguntaExe)
    VALUES ('$materiaID','$pergunta')";

    if (!isset($pergunta) || !isset($materiaID)){  
    } 
    else
    {      
      if($conn->query($sql) === TRUE){

        $sql         = "SELECT * FROM Exercicios WHERE perguntaExe = '$pergunta'";
        $IDQuery     = mysqli_query($conn, $sql);
        $IDResultado = mysqli_fetch_all($IDQuery, MYSQLI_ASSOC);

        if(isset($IDResultado[0]))
        {
          $ExeID           = $IDResultado[0]['exeID'];

          for ($i=0; $i < $numAlt; $i++) { 
            $letra = ${$alphabet[$i]};
            $sql = "INSERT INTO Alternativas(exeID, descAlternativa, respostaAlternativa) VALUES ('$ExeID','$letra', ${'check_' . $alphabet[$i]})";

            if($conn->query($sql) === TRUE){

            }
            else{
              echo "ERROR";
            }
              
          }
        }
        else
        { 
          echo "Não foi possivel encontrar estes dados!";
        }

      } 
      else
      {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
    }
}
else{
}

mysqli_close($conn);
    
?>
<!DOCTYPE html>
<html>
<head>
  <title>Enviar Exercicios - H1storia</title>
  
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="/css/mainStyle.css">
    <link rel="stylesheet" type="text/css" href="/css/signin.css">

</head>

<body class="text-center">
<?php
if($numRegistros == 0)
{
 echo "<form class='form-signin' method='POST'>
      <a href='/'><img class='mb-4' src='/img/LOGOBrowser.png' alt='' width='100' height='100'></a>
      <h1 class='h3 mb-5 font-weight-normal'>Obrigado $nome </h1>
      <p>As informações foram enviadas com sucesso! Nós agradecemos por colaborar!<br>
        $email
      </p>
      <a href='/' class='mt-4 btn btn-lg btn-primary btn-block cadButao' type='submit' style='height: auto;'>Voltar para a Home</a>
      <p class='mt-5 mb-3 text-muted'>&copy; 2018</p>
  </form>";
}
else
{
  echo "<form class='form-signin' method='POST'>
        <a href='/'><img class='mb-4' src='../img/LOGOBrowser.png' alt='' width='100' height='100'></a>
        <h1 class='h3 mb-5 font-weight-normal'>Esta pergunta já esta em nosso banco de dados</h1>
        <p>Se quiser colabrar com o site, encontre uma pergunta nova e nos envie</p>
        <a href='/' class='mt-4 btn btn-lg btn-primary btn-block cadButao' type='submit' style='height: auto;'>Voltar para a Home</a>
        <p class='mt-5 mb-3 text-muted'>&copy; 2018</p>
  </form>";  
}
  ?>
</body>
</html>