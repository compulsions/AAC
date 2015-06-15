<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Associação Académica de Coimbra</title>
    <meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="img/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" href="css/flickity-docs.css" media="screen" />

    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/flickity-docs.min.js"></script>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="jquery.fullPage.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['transparent'],
				scrollingSpeed: 700,
				scrollBar: true
			});
		});
	</script>

</head>
<body>
<div id="fullpage">	
	<div class="section active" id="section0">
		<div class="gallery js-flickity"  data-flickity-options='{ "imagesLoaded": true, "percentPosition": false ,"autoPlay":5000, "wrapAround": true, "freeScroll": true}'>
		  <img class="homepagefoto" src="img/1.png" alt="..." />
		</div>
		<div class="container titulo">
			<a href="index.html"><img src="img/aac2.png" alt="aac" class="aac2"> </a>
			<h1 style="font-size:42pt;" class="cenas"> Associação Académica de Coimbra </h1> 
				
		</div>
	</div>
<div class="section" id="section1s">

<!-- NAVBAR -->
	<?php
		include 'navbar.html';
	?>
<!-- .................................................................................... -->
<!--............................ SECÇÃO BASE............................... -->

		<div class="container cor">
			<div class="subtituloPag"> Nome da Pagina 2</div>
				<div class="col-md-8">
					<div  class="info">
						<p> NENA A PRESIDENTES  NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES </p>
					</div>
				</div>
			<div class="col-md-4">
				<a href="pagina.html">
					<img id="img" style="width:50%; margin-bottom:30px;" src="img/aac.jpg">
				</a>
			</div>
		</div>
<!-- .................................................................................... -->
 </div>
<div class="section" id="section2">
<!--............................ SECÇÃO BASE............................... -->
		<div class="container cor">
			<div class="subtituloPag"> Nome da Pagina 2</div>
				<div class="col-md-8">
					<div  class="info">
						<p> NENA A PRESIDENTES  NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES </p>
					</div>
				</div>
			<div class="col-md-4">
				<a href="pagina.html">
					<img id="img" style="width:100%; margin-bottom:30px;" src="img/aac.jpg">
				</a>
			</div>
		</div>
<!-- .................................................................................... -->
 </div>

<!--............................ SECÇÃO BASE............................... -->
<div class="section" id="section3">
		<div class="container">
			<div id="noticia1" class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
				<div class="noticia noticia-block cor">
				<a href="noticia.html?id=noticia1">
					<div class="nomeNoticia">
						<p> NENA VAI TORNAR-SE PRESIDENTE!!!</p>
					</div>
					<div class="img_noticia_ver">
						<img src="img/aac.jpg" alt="noticia"></a>
					</div>
					<p> Eu criei duas classes diferentes para quando tiver imagens horizontais ou verticais e corta-las de modo a ficar com uma tamanho sem esticar.</p>
					<p> img_noticia_ver -> para vertical </p>
					<p> img_noticia_hor -> para horizontal </p>
					<a class="lermais" href="#"> Ler mais </a>
					</div>	
			</div>
			<div id="noticia2" class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
				<div class="noticia noticia-block cor">
					<a href="noticia.html?id=noticia2 ">
					<div class="nomeNoticia">
						<p> NENA VAI TORNAR-SE PRESIDENTE!!!</p>
					</div>
					<div class="img_noticia_hor">
						<img src="img/uc.jpg" alt="noticia"></a>
					</div>
						<p> NENA VAi TORNAR-SE PRESIDENTE NENA VAi TORNAR-SE PRESIDENTE ENA VAi TORNAR-SE PRESIDENTE...</p>
						<a class="lermais" href="#"> Ler mais </a>
					</div>						
			</div>

			
		</div>
<!-- .................................................................................... -->
 </div>

<div class="section" id="section5">
<!--............................ SECÇÃO BASE............................... -->

		<div class="container cor">
			<div class="subtituloPag"> Nome da Pagina 2</div>
				<div class="col-md-8">
					<div  class="info">
						<p> NENA A PRESIDENTES  NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES NENA A PRESIDENTES </p>
					</div>
				</div>
			<div class="col-md-4">
				<a href="pagina.html">
					<img id="img" style="width:100%; margin-bottom:30px;" src="img/aac.jpg">
				</a>
			</div>
		</div>
<!-- .................................................................................... -->
<!--............................  FOOTER................................ -->
	<?php
		include 'footer.html';
	?>
<!-- .................................................................................... -->

 </div>
</div>

</body>

</html>