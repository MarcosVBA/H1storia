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
$erro = $_SESSION['loginErro'];

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="/img/LOGOBrowser.png">
	<title>Exercicios - H1storia</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
  	<script src="../js/jquery.min.js"></script>
  	<script src="../js/popper.min.js"></script>
  	<script src="../js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="../css/mainStyle.css">

</head>
<body>

<!-- Navbar/ -->
<!-- Navbar Basico -->

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top" id="main-nav">
  
  <a class="navbar-brand mr-4" href="/"><img class="LOGO" src="/img/LOGO.png"></a>

	<div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    	<br>
	    <li class="nav-item">
	    	<a class="nav-link ml-3" href="/exercicios/">Exercicios</a>
	    </li>
	    <li class="nav-item">
	        <a class="nav-link ml-3" href="#">Inventario</a>
	    </li> 
	   	<li class="nav-item">
	        <a class="nav-link ml-3" href="#">Loja</a>
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
<div class="container">
		
		<h2>Classico</h2>
		<form action="classico/">
          <input type="radio" name="materia" value="3" checked>Napoleão<br>
          <input type="radio" name="materia" value="4">Segunda Guerra Mundial<br>
          <input type="radio" name="materia" value="5">Guerra Civil Espanhola<br>
          <input type="radio" name="materia" value="6">Primeira Guerra Mundial<br>
          <input type="radio" name="materia" value="7">Neocolonialismo<br>
          <input type="radio" name="materia" value="8">Idade Média<br>
          <input type="radio" name="materia" value="9">Idade da Pedra<br>
          <input type="radio" name="materia" value="10">Revolução Francesa<br><br>
          <input type="submit">
        </form> 

</div>


<!-- Rodapé -->
<footer id="rodape" style="margin-top: 300px;height: 100%;">
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
</body>
</html>