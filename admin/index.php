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
	$erro = $_SESSION['loginErro'];

	include "../php/conexao.php";

	if($admin == 0 || !isset($usuarioID)){
	  		header("Location: ../");
	}

	$sql              = "SELECT * FROM Materias";
	$materiaQuery     = mysqli_query($conn, $sql);
	$materiaResultado = mysqli_fetch_all($materiaQuery, MYSQLI_ASSOC);
	$numMat      	  = mysqli_num_rows($materiaQuery);

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="/img/LOGOBrowser.png">
	<title>Enviar Exercicios - H1storia</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
  	<script src="/js/jquery.min.js"></script>
  	<script src="/js/popper.min.js"></script>
  	<script src="/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="/css/mainStyle.css">

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
<!-- /Navbar -->
<center>	
<div class="formExe" style="height: 560px;">
	<form method='POST' action='perguntas.php'>

		<div class="form-group mt-5">
			<h5><label for="numExe">Selecione a quantidade de alternativas:</label></h5>
			<select class="form-control" name="numExe" id="numExe" name="numExe">
				<option value="2">  2 </option>
				<option value="3">  3 </option>
				<option value="4">  4 </option>
				<option value="5">  5 </option>
				<option value="6">  6 </option>
			</select>
	    </div>	
	    <br>
		<div class="form-group">
			<h5><label for="materiaID">Selecione a matéria:</label></h5>
			<select class="form-control" name="materiaID" id="materiaID" name="materiaID">
				<?php
			    	for ($i=0; $i < $numMat; $i++) { 
			    		$idOption = $materiaResultado[$i]['materiaID'];
			    		$nomeOption    = $materiaResultado[$i]['nomeMateria'];
			    		echo "<option value='$idOption'> $nomeOption </option>";
			    	}
	    		?>
			</select>
	    </div>	
	    <br>
	    <br>

	    <input type="submit" name="btnSend" class="cadButao d-none d-md-block" value="Enviar" style="width: 50%;padding: 3%;">
	    <input type="submit" name="btnSend" class="cadButao d-md-none" value="Enviar">
	 
	</form> 
 </div>   
</center>
<footer id="rodape" class="footerFixed">
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
		  <a href=" "><img src="/img/facebook.png"> </a>
		  <a href=" "><img src="/img/twitter.png">  </a>
		  <a href=" "><img src="/img/instagram.png">  </a>
		</div>
		</div>
											  
	  </div>
	  <br>
   </div>
</footer>
<?php
	mysqli_close($conn);
?>
</body>
</html>