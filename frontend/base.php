<!DOCTYPE html>
<html>
<head>
	<title>Associação Académica de Coimbra</title>

     <meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link href="img/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" href="css/flickity-docs-slide.css" media="screen" />
    <link rel="stylesheet" href="css/lightbox.css" media="screen" />

    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/flickity-docs.min.js"></script>
    <script src="js/randomcores.js"></script>
   
</head>
<body >
	<header style="margin-bottom:10px;" class="branco">
		<div class="container titulo">
			<div class="aac">
				<div class="col-md-1 col-sm-1 col-xs-12">
					<a href="index.php">
						<img src="img/aac2.png" alt="aac"> 
					</a> 
				</div>
				<div class="col-md-11 col-sm-10 col-xs-12 txt">
					| Associação Académica de Coimbra 
				</div>	
			</div> 
		</div>
		
	</header><!-- NAVBAR -->
	<?php
		include 'navbar.html';
	?>
<!--............................  SLIDESHOW + CALENDARIO................................. -->
	<?php
		include 'slideshow.html';

		$id= $_GET['id'];
		$nome= $_GET['nome'];
		$type= $_GET['type'];
		

	?>
<!-- .................................................................................... -->


<!--............................  SECTION DE BASE................................. -->
	<section>
		<div class="container cor">
			<div class="tituloPag"> <?php   echo "<a href='".$type.".php'>"; 
											echo $type."</a>";
											echo "  >  ";
											echo $nome?>
						</div>
				<div class="col-md-3 info centrar">

					<img src="img/desporto/andebol.png" style="width:90%;">


				</div>
				<div class="col-md-8 borderesquerda">
					<?php

					?>
					<p>Esta é uma Secção orientada para 3 vertentes desportivas: Formação, Manutenção e Competição.</p>
					<p>Nesta última vertente, participa na área federada e universitária.</p>
					<p>A nível universitário, a Secção de Atletismo da AAC, além de ter sido Campeã Nacional de Corta-Mato coletivo, tem tido vários campeões nacionais individuais, quer em corta-mato quer em pista.</p>
					<p>Tem atletas que representaram Portugal nas Universíadas e Mundiais Universitários.</p>
					<p>Esteve ainda vários anos na 1ª Divisão Nacional em masculinos.</p>

					
				</div>

		</div>

	</section>
<!-- .................................................................................... -->
	
<!-- FOOTER -->
	<?php
		include 'footer.html';
	?>
<!-- ..................... -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

</body>


</html>