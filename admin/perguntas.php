<?php
//Importantes
$alphabet = array("a","b","c","d","e","f");
$ALPHABET = array("A","B","C","D","E","F");

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

	//Pegar valores da pagina anterior
	$numAlternativas = $_POST['numExe'];
	$materiaID = $_POST['materiaID'];
	//Armazenar em SESSION
	$_SESSION["numAlt"] = $numAlternativas;
	$_SESSION["materiaID"] = $materiaID;

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
    
    <style>
        th{
            padding: 10px;
        }
    </style>

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
</br>
<center>	
    <strong><p>* para pular uma linha, digite "< br >" sem os espaços<br>
    * para criar um titulo, digite "< h3 >" no inicio e no final da frase digite "< /h3 > sem os espaços"<br>
    * para colocar negrito, digite "< strong >no inicio e no final da frase digite "< /strong > sem os espaços"</p></strong>
    <br><br>
	<table>
		<tr>
			<th>
				<div class="formExe">
				<form action="completo.php" method="POST">
				<label for="mensagem">Perguntas:</label>
			</th>
			<th>
				<textarea class="" id="perguntas" placeholder="Insira a pergunta" name="pergunta"  rows="4" cols="50"></textarea>
			</th>
			<th>
				<h5>A alternativa esta correta?</h5>
			</th>
		</tr>
		<?php

			for ($i=0; $i < $numAlternativas; $i++) { 
			echo 
			"
			<tr>
			<th>
				<label for='option'>Alternativa $ALPHABET[$i]:</label>
			</th>
			<th>
				<textarea id='alternativa_$alphabet[$i]' name='$alphabet[$i]'  rows='4' cols='50'></textarea>
			</th>
			<th>
				<input type='checkbox' name='check_$alphabet[$i]'>
			</th>
			</tr>
			";	
			}

		?>
		<tr>
			<th colspan="3">
				<input type="submit" name="btnSend" class="cadButao d-none d-md-block" value="Enviar" style="width: 50%;padding: 3%;">
				<input type="submit" name="btnSend" class="cadButao d-md-none" value="Enviar">
			</th>	
		</form> 
		</tr>
		</div>   
	</table>	
</center>
<?php
	mysqli_close($conn);
?>
</body>
</html>