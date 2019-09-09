<?php
include "../php/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
    
   
$consulta = ("SELECT * FROM Usuario WHERE emailUsuario = '$email'");
$queryConsulta = mysqli_query($conn,$consulta);
$numRegistros = mysqli_num_rows($queryConsulta);
if($numRegistros == 0)
{   

    $sql = "INSERT INTO Usuario (nomeUsuario, emailUsuario, senhaUsuario, levelUsuario)
    VALUES ('$nome', '$email', '$senha', 1)";

    if (!$nome || !$senha || !$email ){  
    } 
    else
    {      
    if($conn->query($sql) === TRUE){
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
	<title>Cadastro - H1storia</title>
	
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
      <h1 class='h3 mb-5 font-weight-normal'>Parabens $nome </h1>
      <p>As informações foram enviadas com sucesso! Agora você faz parte da H1storia.<br>
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
        <h1 class='h3 mb-5 font-weight-normal'>Este email já esta sendo utilizado</h1>
        <p>Tente com outro email, nós esperamos por você</p>
        <a href='/' class='mt-4 btn btn-lg btn-primary btn-block cadButao' type='submit' style='height: auto;'>Voltar para a Home</a>
        <p class='mt-5 mb-3 text-muted'>&copy; 2018</p>
  </form>";  
}
  ?>
</body>
</html>