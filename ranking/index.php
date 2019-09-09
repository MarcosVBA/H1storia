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

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="/img/LOGOBrowser.png">
	<title>Ranking - H1storia</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
  	<script src="/js/jquery.min.js"></script>
  	<script src="/js/popper.min.js"></script>
  	<script src="/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="/css/mainStyle.css">
    <script type="text/javascript" src="/js/home.js"></script>

    <style>
        .titulo {
            background-color: #12a112;
            /*width: 48%;*/
            /*border-radius: 50px;*/
            padding: 10px;
            color: white;
        }
        .ranking{
            background-color: gainsboro;
            width: 60%;
            padding: 15px;
            border-radius: 5px;
        }
        @media only screen and (max-width: 600px){
        	.ranking_mobile{
            background-color: gainsboro;
            width: 90%!important;
            border-radius: 5px 5px 0px 0px;
        	}
        	h1 {
        		font-size: 30px;
        	}
        }
        .footer_fixed{
            /*position: fixed;
            width: 100%;
            bottom: 0px;*/
        }
    </style>    
</head>
<body>

<!-- Navbar/ -->
<!-- Navbar Basico -->

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top" id="main-nav">
  
  <a class="navbar-brand mr-4" href="/"><img class="LOGO" src="../img/LOGO.png"></a>

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
	    </li>";
	    }else{
	       echo "<li class='nav-item ml-3'>
	    	<a class='nav-link d-lg-none' href='#' onclick='openModal()' data-target='#collapsibleNavbar'>Login</a>
	    </li>";
	    }
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
        echo "<p class='text-danger erroMensagem'>$erro</p>";
  	    echo "<form class='form-inline d-none d-lg-block' action='/php/login.php' method='POST'>
        <input class='form-control mr-sm-2' type='text' placeholder='Email' name='email' required>
       	<input class='form-control mr-sm-2' type='password' placeholder='Senha' name='senha' required>
        <input type='submit' class='btn btn-success'style='width:auto;'value='Login'>
      	</form>";
  	}    
    ?>
    
<!-- Botão de Menu -->

	<button class="navbar-toggler text-succes" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>	</button>

</nav>
<!-- /Navbar -->
<center>
	<h1 class="my-5">Top 15 Melhores Jogadores</h1>

	<div class="mt-5 ranking ranking_mobile">
	    <strong>
	        
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
    if ($nome == $row['nomeUsuario']) {
    	$saved = $rank;
    }
    if($rows < 16){
        echo ("#" . $rank." - ".$row['nomeUsuario']." com ".$row['pontosRanking'] . " pontos<br>");
    }
  }
}

?>
        </strong>
	</div>
<h1 class="titulo mb-5"><?php
if (isset($usuarioID)) {
	echo "Sua posição no ranking é #$saved";
}else
	echo "Se registre para participar!";
?></h1>
</center>
<footer id="rodape" class="footer_fixed">
   <div class="container2-sm-none">
      <div class="row">
	       <div class="col-md-2">
		         <h3 class="titulo-footer d-md-block d-none">h1storia</h3>
		   </div>
		   <div class="col-md-8 footerItens linksFooter">
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
		  <a href=" "><img src="../img/facebook.png"> </a>
		  <a href=" "><img src="../img/twitter.png">  </a>
		  <a href=" "><img src="../img/instagram.png">  </a>
		</div>
		</div>
											  
	  </div>
	  <br>
   </div>
</footer>
<div id="id01" class="modal modalOverflow d-lg-none">
  <form class="modal-content animate" action="/php/login.php" method="POST">
  	<div class="container">
  		<span onclick="document.getElementById('id01').style.display='none'" class="close my-2" title="Close Modal modalOverflow">&times;</span>
	    <div class="imgcontainer">
	      <img src="/img/LOGOBrowser.png" class="autoImg mt-3" alt="Avatar">
	    </div>

	      <label for="inputName" class="sr-only mt-2">Nome</label>
	      <input name="email" type="text" id="inputName" class="form-control mt-2" placeholder="Email" required autofocus>
	      <label for="inputPassword" class="sr-only">Senha</label>
	      <input name="senha" type="password" id="inputPassword" class="form-control mt-2" placeholder="Senha" required>
	      <input type="submit" class="mt-4 btn btn-lg btn-primary btn-block cadButao" value="Login">

	    <div class="container centralizar">
	      <button class="botaoOverlay cancelbtn" type="button" onclick="document.getElementById('id01').style.display='none'"><strong>Cancel</strong></button>
	    </div>

	</div>    
  </form>
</div>
<?php
	mysqli_close($conn);
?>
</body>
</html>