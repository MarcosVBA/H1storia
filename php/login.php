<?php
  session_start();
  //Conexao com o DB
  include "../php/conexao.php";

  if((isset($_POST['email'])) && (isset($_POST['senha'])))
  {
    //Escape String(email)
    $usuario        = mysqli_real_escape_string($conn, $_POST['email']); 
    //Escape String e MD5(Senha)
    $senha          = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha          = md5($senha);
    //Buscando Dados no DB  
    $sql            = "SELECT * FROM Usuario WHERE emailUsuario = '$usuario' AND senhaUsuario = '$senha' LIMIT 1";
    $loginQuery     = mysqli_query($conn, $sql);
    $loginResultado = mysqli_fetch_assoc($loginQuery);
    //echo "$sql";
    //var_dump($loginResultado);

    if(isset($loginResultado))
    {
      //Se conectado
      $_SESSION['usuarioID'] = $loginResultado['usuarioID'];
      $_SESSION['nomeUsuario'] = $loginResultado['nomeUsuario'];
      $_SESSION['emailUsuario'] = $loginResultado['emailUsuario'];
      $_SESSION['levelUsuario'] = $loginResultado['levelUsuario'];
      $_SESSION['pontosEx'] = $loginResultado['pontosEx'];
      $_SESSION['pontosRanking'] = $loginResultado['pontosRanking'];
      $_SESSION['ultimaDataLogada'] = $loginResultado['ultimaDataLogada'];
      $_SESSION['dinheiroUsuario'] = $loginResultado['dinheiroUsuario'];
      $_SESSION['adminUsuario'] = $loginResultado['adminUsuario'];
      $_SESSION['loginErro'] = '';
      header("Location: ../");  
    }
    else
    {  
      //Se não encontrar resultados no DB
      $_SESSION['loginErro'] = "Usuário ou senha inválido!";
      header("Location: ../");
    }
  }
  else
  {
    //Se nome e senha estiverem vazios
    $_SESSION['loginErro'] = "Usuário ou senha inválido!";
    header("Location: ../index.php");
  }

mysqli_close($conn);
?>