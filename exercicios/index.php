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

<center class="d-md-none">
<form method="GET" action="classico/">
<div class="container">
 <div class="row">
	 <div class="col-md-6">
	     <div class="container">
	        <center><h2>Seleção da Matéria</h2></center>
	     </div>
	    <div class="form-group" style="width: 50%">
	        <label for="option">Selecione a Matéria:</label>
	        <select class="form-control" name="materia" id="option">
	            <option value="3">  Napoleão </option>
	            <option value="4">  Segunda Guerra Mundial </option>
	            <option value="5">  Guerra Civil Espanhola </option>
	            <option value="6">  Primeira Guerra Mundial </option>
	            <option value="7">  TEST </option>
	        </select><br>
	        <button type="send" class="cadButao bt n-primary">Começar!</button>
        </div>
        
        <div>
            <img src="..\img/lapis.png" style="width: 90%">
        </div>
        </div>
        <div class="col-md-6" style="margin-top: 100px;">
	    <div class="bgNoticia">
	        
	    
	            <div class="mainCard">
	            <text>Nada do que é social e humano é mais real que as utopias. Na sua vertente eutópica, as utopias constituíram sempre o fundamento simbólico e mítico sem o qual nenhuma forma de organização social se sustenta, justifica ou sobrevive. E criam, tanto na vertente eutópica como na distópica, o vocabulário da revolução e da mudança: sem os amanhãs que cantam (ou choram) teríamos, em vez de História, um presente intemporal e eterno - como o dos faraós ou o de Francis Fukuyama.
Aldous Huxley publicou o seu Brave New World em 1932. George Orwell, que não tinha em grande conta este livro ou o seu autor, publicou 17 anos depois a sua própria distopia, Nineteen Eighty-Four. Entre estas duas datas interpôs-se a Segunda Grande Guerra: não admira que na primeira a técnica básica da opressão do Estado fosse a manipulação genética e que na segunda, depois do descrédito em que o regime nazi lançou o eugenismo, as técnicas principais da opressão sejam a lavagem ao cérebro, a crueldade gratuita e a manipulação da linguagem.
Apesar desta e de outras diferenças, os dois textos foram muitas vezes lidos, nas décadas seguintes, como os dois pólos - um hedonista, outro o oposto disto - duma mesma distopia, a que os sinais dos tempos davam e dão plausibilidade. Esta distopia bipolar é identificável em grande parte com a ideia de modernidade; e hoje a invocação da modernidade, sempre na boca dos políticos e dos capitães da indústria, soa aos nossos ouvidos tanto a ameaça como a promessa.</text>
	        </div>
	    </div>
        
	</div>
	</div>
	
 </div>
 </form>
    </center><div class="d-md-block d-none">
        <form method="GET" action="classico/">
<div class="container">
 <div class="row">
	 <div class="col-md-6">
	     <div class="container">
	        <center><h2>Seleção da Matéria</h2></center>
	     </div>
	    <div class="form-group" col="6" style="width: 50%">
	        <label for="option">Selecione a Matéria:</label>
	        <select class="form-control" name="materia" id="option">
	            <option value="3">  Napoleão </option>
	            <option value="4">  Segunda Guerra Mundial </option>
	            <option value="5">  Guerra Civil Espanhola </option>
	            <option value="6">  Primeira Guerra Mundial </option>
	            <option value="7">  TEST </option>
	        </select><br>
	        <button type="send" class="cadButao bt n-primary">Começar!</button>
        </div>
        
        <div>
            <img src="..\img/lapis.png" style="width: 90%">
        </div>
        </div>
        <div class="col-md-6" style="margin-top: 100px;">
	    <div class="bgNoticia">
	        
	    
	            <div class="mainCard">
	            <text>Nada do que é social e humano é mais real que as utopias. Na sua vertente eutópica, as utopias constituíram sempre o fundamento simbólico e mítico sem o qual nenhuma forma de organização social se sustenta, justifica ou sobrevive. E criam, tanto na vertente eutópica como na distópica, o vocabulário da revolução e da mudança: sem os amanhãs que cantam (ou choram) teríamos, em vez de História, um presente intemporal e eterno - como o dos faraós ou o de Francis Fukuyama.
Aldous Huxley publicou o seu Brave New World em 1932. George Orwell, que não tinha em grande conta este livro ou o seu autor, publicou 17 anos depois a sua própria distopia, Nineteen Eighty-Four. Entre estas duas datas interpôs-se a Segunda Grande Guerra: não admira que na primeira a técnica básica da opressão do Estado fosse a manipulação genética e que na segunda, depois do descrédito em que o regime nazi lançou o eugenismo, as técnicas principais da opressão sejam a lavagem ao cérebro, a crueldade gratuita e a manipulação da linguagem.
Apesar desta e de outras diferenças, os dois textos foram muitas vezes lidos, nas décadas seguintes, como os dois pólos - um hedonista, outro o oposto disto - duma mesma distopia, a que os sinais dos tempos davam e dão plausibilidade. Esta distopia bipolar é identificável em grande parte com a ideia de modernidade; e hoje a invocação da modernidade, sempre na boca dos políticos e dos capitães da indústria, soa aos nossos ouvidos tanto a ameaça como a promessa.</text>
	        </div>
	    </div>
        
	</div>
	</div>
	
 </div>
    </div>
</form>	
 </div>
</div>

<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<!-- Rodapé -->
<footer id="rodape" style="margin-top: 200px;height: 100%;">
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
											  
	  </div>
	  <br>
   </div>
</footer>
</body>
</html>