<?php
session_start();
//Materia Escolhida
if(isset($_SESSION['materia']))
{}
else
{
  $_SESSION['materia'] = $_GET['materia'];
}
$materia = $_SESSION['materia'];

//Importantes
$alphabet = array("a","b","c","d","e","f");
$ALPHABET = array("A","B","C","D","E","F");
$numJaFeitos = $_SESSION['numJaFeitos'] + 1;
$resposta = $_POST['resposta'];

//Conexao com o DB
include "../../php/conexao.php";

//Checagem de Acertos e informações da pagina anterior
if ($numJaFeitos == 11) {
    mysqli_close($conn);
    header('Location: conclusao.php');
}

//Dados do Usuario
$nome          = $_SESSION["nomeUsuario"];
$usuarioID     = $_SESSION['usuarioID'];
$email         = $_SESSION['emailUsuario'];
$level         = $_SESSION['levelUsuario'];
$pontos        = $_SESSION['pontosEx'];
$pontosRanking = $_SESSION['pontosRanking'];
$ultimaData    = $_SESSION['ultimaDataLogada'];
$dinheiro      = $_SESSION['dinheiroUsuario'];
$admin = $_SESSION['adminUsuario'];

//Obter exercicios
$sql                = "SELECT * FROM Exercicios WHERE materiaID = '$materia'";
$exercicioQuery     = mysqli_query($conn, $sql);
$numExercicios      = mysqli_num_rows($exercicioQuery);
$exercicioResultado = mysqli_fetch_all($exercicioQuery, MYSQLI_ASSOC);
$jaFeitos = $_SESSION['jaFeitos'];
do{
  $exercicioPagina    = rand(0, ($numExercicios - 1));
}while(isset($jaFeitos[$exercicioPagina]));
$_SESSION['jaFeitos'][$exercicioPagina] = 1;

if(isset($exercicioResultado))
{
//Se for encontrado

  //Informacoes da pegunta
  $pergunta           = $exercicioResultado[$exercicioPagina]['perguntaExe'];
  $perguntaID         = $exercicioResultado[$exercicioPagina]['exeID'];
  $imgExe = $exercicioResultado[$exercicioPagina]['img'];

  //Obter Respostas
  $sqlPerguntas       = "SELECT * FROM Alternativas WHERE exeID = '$perguntaID'";
  $PerguntasQuery     = mysqli_query($conn, $sqlPerguntas);
  $numPerguntas       = mysqli_num_rows($PerguntasQuery);
  $PerguntasResultado = mysqli_fetch_all($PerguntasQuery, MYSQLI_ASSOC);

  $_SESSION['numJaFeitos']++;
}
else
{ 
//Se Não houver Resposta

  echo "Não foi possivel encontrar estes dados!";
}

//Debug
  //var_dump($exercicioResultado);
  //echo "\n\n";
  //var_dump($numExercicios);
  //echo "\n\n";
  //var_dump($exercicioPagina);
  //echo "\n\n";
  //var_dump($pergunta);
  //echo "\n\n";
  //var_dump($perguntaID);
  //var_dump($resposta);
  
  mysqli_close($conn);
?>
<html>
<head>
	<link rel="icon" href="/img/LOGOBrowser.png">
	<title>Exercicios - H1storia</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
  	<script src="/js/jquery.min.js"></script>
  	<script src="/js/popper.min.js"></script>
  	<script src="/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="/css/mainStyle.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>

<!-- Navbar/ -->
<!-- Navbar Basico -->

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top" id="main-nav">
  
  <a class="navbar-brand mr-4" href="/"><img class="LOGO" src="/img/LOGO.png"></a>

	<div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    	<br>
    	<?php
		if(isset($usuarioID)){
		     if($admin == 1){
	            echo "<li class='nav-item'>
	        <a class='nav-link ml-3' href='/admin/'>Admin</a>
	    </li>";
	        }
		    echo "<li class='nav-item'>
	    	<a class='nav-link ml-3' href='/exercicios/'>Exercicios</a>
	    </li>";
		}
		?>
		<li class="nav-item">
			<a class="nav-link ml-3" href="/ranking/">Ranking</a>
		</li>
		<li class="nav-item">
			<a class="nav-link ml-3" href="#">Contatos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link ml-3" href="#">Sobre</a>
		</li>
	    <br class="d-lg-none my-lg-2">
	    <?php
	    if(isset($usuarioID)){
	    echo "<li class='nav-item ml-3'>
	        <a class='nav-link d-lg-none' href='/php/sair.php'>Sair</a>
	    </li>";}
	    ?>
	    <br>
    </ul>
	</div> 

<!-- Formulario de login -->

    <?php
    if(isset($usuarioID)){
        echo ("<div class='loginName'>$nome - LV:$level</div>
  	    <a class='sairbtn d-none d-lg-block' href='/php/sair.php'><center>Sair</center></a");
    }else{
        hader('Location: /');
  	}    
    ?>
    
<!-- Botão de Menu -->

	<button class="navbar-toggler text-succes" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>	</button>

</nav>

<!-- Conteudo -->

<div class="container mt-3">
  <div>
    <span><h1>Exercicio <?php echo "$numJaFeitos"; ?></h1><strong class="text-muted"><?php echo "$numJaFeitos"; ?>/10</strong></span>
  </div>

  <div class="container conteudoCentral mt-2">
    <div class="cartaExercicio">
        <h3>Pergunta:</h3>
        <?php 
        /////////////////////////////////img/////////////////////////////////////////
        if(isset($imgExe) And $imgExe != null){
          echo "
            <div style='width: 100%;' class='my-1'>
            <center>
              <img src='/img/exe/$imgExe' style='width: 100%;'>
              </center>
            </div>
          ";
        }


        ?>
      <p class="paragrafoExercicio"><?php echo "$pergunta" ?></p>
    </div>
  </div>

  <hr>

  <div class="container">
  <h4>Respostas: </h4>
  <br>
  <!-- Nav pills -->
  <center>
  <ul class="nav nav-pills marginAlternativa" role="tablist">
    <?php 
    //alphabet
    //ALPHABET
    for($x = 0; $x < $numPerguntas; $x++)
    {
        if($x == 0){$activeState = "active";}else{$activeState = " ";}
      echo "<li class='nav-item'>
      <a class='nav-link $activeState' data-toggle='pill' href='#$alphabet[$x]'>Resposta $ALPHABET[$x]</a>
    </li>";
    }

    ?>
    <!--<li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#a">Resposta A</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#b">Resposta B</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#c">Resposta C</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#d">Resposta D</a>
    </li>-->
  </ul>
  </center>

  <hr>

  <!-- Tab panes -->
  <div class="tab-content">

    <?php
    for($y = 0; $y < $numPerguntas; $y++)
    {
    if($y == 0){$activeState = "active";}else{$activeState = " ";}
    $perguntaCard = $PerguntasResultado[$y]['descAlternativa'];
    $correta = $PerguntasResultado[$y]['respostaAlternativa'];
    echo "<form id='$alphabet[$y]' class='anime container $activeState tab-pane cartaExercicio' method='POST' action='../classico/'><br>
      <h3>Resposta:</h3>
      <p style='text-indent: 2rem;'> 
      $perguntaCard
      </p><br>
      <input type='text' value='$correta' style='display:none;' name='resposta'>
      <input type='submit' name='btn' class='ok' value='Escolher'>
    </form>";
    }
    ?>

  </div>
</div>
  
</div>

<br>
<br>


<!-- Rodapé -->
<footer id="rodape">
   <div class="container2-sm-none">
      <div class="row">
         <div class="col-md-2">
             <h3 class="titulo-footer d-md-block d-none">h1storia</h3>
       </div>
       <div class="col-md-8 footerItens">
        <center>
         
            <a href=" " class="mr-2 linksFooter"> Manutenção</a>
          <a href=" " class="mr-2 linksFooter"> Novidades </a>
          <a href=" " class="mr-2 linksFooter"> Política </a>
          <a href=" " class="mr-2 linksFooter"> Sobre</a>
          <a href=" " class="mr-2 linksFooter"> Cadastro </a>
          <a href=" " class="mr-2 linksFooter"> Login </a>
          <a href=" " class="d-sm-none mr-2 linksFooter"> Contatos</a>
      </center> 
       </div> 
      <div  class="col-md-2 icones d-md-block d-none">
      <div align="right">
      <a href=" "><img src="../../img/facebook.png"> </a>
      <a href=" "><img src="../../img/twitter.png">  </a>
      <a href=" "><img src="../../img/instagram.png">  </a>
    </div>
    </div>
                        
    </div>
   </div>
   <br>
</footer>
<?php
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
}else{}
?>
</body>
</html>