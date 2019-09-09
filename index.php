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

if($level >= 20){
	$avatar = "LVL_4.png";
}elseif($level >= 10){
	$avatar = "LVL_3.png";
}elseif($level >= 5){
	$avatar = "LVL_2.png";
}else{
	$avatar = "LVL_1.png";
}

if($admin != null and $admin != 0){
	$avatar = "admin.gif";
}
if ($email == "m.vinicius123abc@gmail.com") {
	$avatar = "marcos.gif";
	$avatar = "JC.gif";
}
if ($email == "Kiritojulian0@gmail.com"){
	$avatar = "Run.gif";
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="/img/LOGOBrowser.png">
	<title>Bem Vindo ao H1storia</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
  	<script src="/js/jquery.min.js"></script>
  	<script src="/js/popper.min.js"></script>
  	<script src="/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="/css/mainStyle.css">

    <script type="text/javascript" src="/js/home.js"></script>

</head>
<body>

<!-- Navbar/ -->
<!-- Navbar Basico -->

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top" id="main-nav">
  
  <a class="navbar-brand mr-4" href="#"><img class="LOGO" src="img/LOGO.png"></a>

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
        echo ("<div class='loginName desaparecer'>$nome - LV:$level</div>
  	    <a class='sairbtn d-none d-lg-block' href='/php/sair.php'><center>Sair</center></a");
    }else{
      
  	    echo "<form class='form-inline d-none d-lg-block' action='/php/login.php' method='POST'>
        <input class='form-control mr-sm-2' type='text' placeholder='Email' name='email' required>
       	<input class='form-control mr-sm-2' type='password' placeholder='Senha' name='senha' required>
        <input type='submit' class='btn btn-success'style='width:auto;'value='Login'>";
        if($erro != null || $erro != 0){
        	echo "<p class='text-danger erroMensagem'>$erro</p>";
    	}
      	echo "</form>";
  	}    
    ?>
    
<!-- Botão de Menu -->

	<button class="navbar-toggler text-succes" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>	</button>

</nav>

<!-- /Navbar -->

<!-- Substituto do Carrosel(para mobile) -->
<?php
if(!isset($usuarioID)){
echo"<div class='carousel carouselSubstitute d-sm-none'>
	<div class='carousel-inner
	'>
		<div class='carousel-item wideimg active'>
			<img src='img/lapisFull.png'>
			<div class='carousel-caption'>
				<h5 style='font-size: 16px;'>Bem Vindo ao H1storia</h5>
				<p style='font-size: 14px;'>Aqui nós temos tudo que você precisa para ir bem em historia no ensino médio e vestibulares, como o ENEM.</p>
			</div>
		</div>
	</div>
</div>";}
?>

<!-- Cartao Principal do site -->
<div class="mainCard">
			<div class="row">
				<div class="col-9 bodyCard d-none d-sm-block">
					<div class="container my-1">
					    <?php
					    if(isset($usuarioID)){
					        echo "<div class='row'>
					        <div class='col-xl-3 d-none d-xl-block'><img src='img/level/$avatar' style='background-color: gray;height: 200px;border-radius: 360px;width: 200px;'></div>
					        <div class='col-xl-9 mt-2'><h4>Usuario: $nome </h4>";
					        echo "<p>Level: $level<br>
					        Email: $email<br>
					        Pontos de Experiencia: $pontos<br>
					        Pontos do Ranking: $pontosRanking<br>
					        Dinheiro: $dinheiro<br>
					        Admin: $admin
					        </div>
					        </div>";
					    }else{
					    echo "
						<h5>Bem Vindo ao H1storia!!!</h5>
						<p>
						Aqui nós temos tudo que você precisa para ir bem em historia no ensino médio e vestibulares, como o ENEM. Pratique com exercicos de vestibulares anteriores, atualizados sobre varios temas importantes que vão te ajudar a melhorar as suas notas. <br>
						</p>";}
						?>
					</div>
				</div>
				<?php
				if(!isset($usuarioID)){
				echo "<div class='col-sm-3 semLink d-sm-block d-none'>
					<a href='cadastro/' class='semLink'>
					<button type='button' class='cadButao btn-primary'><strong>Cadastre-se Agora</strong></button>
					</a>
				</div>";
				}else{
				    echo "<div class='col-sm-3 semLink d-sm-block d-none'>
					<a href='exercicios/' class='semLink'>
					<button type='button' class='cadButao btn-primary'><strong>Exercicios</strong></button>
					</a>
				</div>";
				}
				?>
			</div>
			<?php
				if(!isset($usuarioID)){
					echo "<div class='semLink d-sm-none'>
						<a href='cadastro/' class='semLink'>
						<button type='button' class='cadButao btn-primary'><strong>Cadastre-se Agora</strong></button>
						</a>
					</div>
					<div type='button' class='d-sm-none'>
					<button class='logButao btn-primary' onclick='openModal()'><strong>Login</strong></button></button>
					</div>";
				}else{
				    echo "<div class='bodyCard container d-sm-none mb-2'>
							<center><div class='row'>
					        <div class='col-xl-3 d-sm-none'><img src='img/level/$avatar' style='background-color: gray;height: 200px;border-radius: 360px;width: 200px;'></div>
					        <div class='col-xl-9 mt-2'><h4>Usuario: $nome </h4>
					        <p>Level: $level<br>
					        Email: $email<br>
					        Pontos de Exeperiencia: $pontos<br>
					        Pontos do Ranking: $pontosRanking<br>
					        Dinheiro: $dinheiro<br>
					        Admin: $admin
					        </center></div></div>
					</div>";
					echo "<div class='semLink d-sm-none'>
					<a href='exercicios/' class='semLink'>
					<button type='button' class='cadButao btn-primary'><strong>Exercicios</strong></button>
					</a>";	

					if($admin == 1){
						echo "<a href='/admin/' class='semLink'>
					<button type='button' class='logButao btn-primary'><strong>Admin</strong></button>
					</a>";
					}

				}
			?>
		</div>	
	</div>
</div>	


 <!-- Carrosel/ -->

 <div id="demo" class="carousel slide d-md-block d-none" data-ride="carousel">

  <!-- Indicadores -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- Slides -->
  <div class="carousel-inner">
    <div class="carousel-item wideimg active">
      <img src="img/lapisv3.png" alt="ERROR">
      <div class="carousel-caption">
		<h1>Junte-se a esta grande comunidade de 0 pessoas</h1>
		<p>Venha ser mais um dessas 0 pessoas que já utilizam o site como uma forma de estudo para vestibulares e provas.

	</p>
	</div>
    </div>
    <div class="carousel-item wideimg">
      <img src="img/livros.png" alt="ERROR">
      <div class="carousel-caption">
      	<h1>Você pode Confiar!!!</h1>
      	<p>A H1 e o melhor lugar para você aprender e desfrutar a história. Todos os nossos exercicios são trazidos de vestibulares conhecidos e prestigiados.

		</p>
      </div>
    </div>
    <div class="carousel-item wideimg">
      <img src="img/educacaov3.png" alt="ERROR">
      <div class="carousel-caption">
      	<h1>Precisando de Ajuda para o vestibular?</h1>
      	<p>Venha adquirir conhecimento conosco, aqui   tiramos todas as suas dúvidas, não perca tempo! </p>
      </div>
    </div>
  </div>

  <!-- Controle -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<!-- Substituto do Carrosel(para telas menores) -->

<div class="carousel carouselSubstitute d-md-none d-sm-block d-none">
	<div class="carousel-inner">
		<div class="carousel-item wideimg active">
			<img src="img/lapisFull.png">
			<div class="carousel-caption">
				<h4>Venha fazer parte da nossa comunidade</h4>
				<p>Venha ser mais um dessas 0 pessoas que já utilizam o site como uma forma de estudo para vestibulares e provas.</p>
			</div>
		</div>
	</div>
</div>

 <!-- /Carrosel -->


<!-- Conteudo/ -->

<!-- Barra -->
<?php
if(!isset($usuarioID)){
echo "<div class='mainCard d-sm-block d-none'>
	<div class='tituloInfo'>
		<h5>Informações</h5>
	</div>
</div>

<!-- informaçoes -->

<div class='row my-4'>
	<div class='col-md-4 centralizar'>
		<div class='container'>
			<img src='img/livro.png' class='circuloimg'>
			<h3>Saiba mais</h3>
			<p>Quer saber mais do nosso site e só entrar no link abaixo. <a href='sobre/sobre.php'>Clique aqui</a>.</p>
		</div>
	</div>
	<div class='col-md-4 centralizar'>
		<div class='container'>
			<img src='img/livro.png' class='circuloimg'>
			<h3>Misão, Visão e Valores</h3>
			<p>Este site foi feiro por um grupo de alunos do Centro Paula Souza. Este é nosso projeto de TCC
<a href='sobre/sobre.php'>Clique aqui</a> para saber mais!</p>
		</div>
	</div>
	<div class='col-md-4 centralizar'>
		<div class='container'>
			<img src='img/livro.png' class='circuloimg'>
			<h3>Contatos</h3>
			<p>Precisa de ajudar? É só entra em contato com a nossa equipe especializada, <a href='sobre/sobre.php'>Clique aqui</a>
		</div>
	</div>
</div>";}
?>
<!-- /Conteudo -->

<!-- Noticias/ -->

<!-- Titulo -->

<div class="mainCard">
	<div class="tituloNoticia mt-3"><h5>Novidades</h5></div>
</div>

<!-- Espaço da noticia -->

<div class="bgNoticia">
	<div class="row my-1 mx-1 mt-2">
		<div class="col-1 d-none d-lg-block"><div class="circulo"></div></div>
		<div class="col-lg-11 bodyCard"><h5>Os primeiros Exercicios</h5><p>Dia 17 de Setembro foi quando os primeiros exercicios foram adicionados, exercicios sobre napoleão. Em breve mais exercicios!</p></div>
	</div>
	<div class="row my-1 mx-1">
		<div class="col-1 d-none d-lg-block"><div class="circulo"></div></div>
		<div class="col-lg-11 bodyCard"><h5>Sistema de Login</h5><p>Agora o H1storia possui um sistema de Login, as primeiras contas já foram criadas, cadastre-se para ter uma também.</p></div>
	</div>
	<div class="row my-1 mx-1">
		<div class="col-1 d-none d-lg-block"><div class="circulo"></div></div>
		<div class="col-lg-11 bodyCard"><h5>Adição do Sistema de Cadastro</h5><p>Agora o H1storia possui um formularios de cadastro.</p></div>
	</div>
	<div class="row my-1 mx-1 mb-2">
		<div class="col-1 d-none d-lg-block"><div class="circulo"></div></div>
		<div class="col-lg-11 bodyCard"><h5>Abertura dos Servidores</h5><p>Dia 8 de Agosto, o site H1storia entrou, pela primeira vez, online.</p></div>
	</div>
</div>

<!-- /Noticias -->

<!-- Rodapé -->
<footer id="rodape">
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
		  <a href=" "><img src="img/facebook.png"> </a>
		  <a href=" "><img src="img/twitter.png">  </a>
		  <a href=" "><img src="img/instagram.png">  </a>
		</div>
		</div>
											  
	  </div>
	  <br>
   </div>
</footer>


<div id="id01" class="modal modalOverflow d-lg-none">
  <form class="modal-content animate" action="php/login.php" method="POST">
  	<div class="container">
  		<span onclick="document.getElementById('id01').style.display='none'" class="close my-2" title="Close Modal modalOverflow">&times;</span>
	    <div class="imgcontainer">
	      <img src="img/LOGOBrowser.png" class="autoImg mt-3" alt="Avatar">
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
<?php $_SESSION['loginErro'] = ''; ?>
</body>
</html>