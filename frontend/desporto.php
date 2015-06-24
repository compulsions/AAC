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
	?>
<!-- .................................................................................... -->


<!--............................  SECTION DE BASE................................. -->
	<section id="inicial">
		<div class="container cor">
			<div class="tituloPag"> Secções Desportivas</div>
			<div class="info  nucleos">
				<!-- Triggers  Andebol -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="base.php?type=desporto&id=1&nome=Andebol"  class="radius button">
					<img  src="img/desporto/andebol.png" onerror="this.src='notfound.png'" alt="secção desportiva">
					</a>
					<h2> Andebol </h2>
				</div>


				<!-- Triggers  Atletismo -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="base.php?type=desporto&id=2&nome=Atletismo" class="radius button">
					<img  src="img/desporto/atletismo.png" onerror="this.src='notfound.png'" alt="secção desportiva">
					</a>
					<h2> Atletismo </h2>
				</div>


				<!-- Triggers  Badminton -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="base.php?type=desporto&id=3&nome=Badminton" class="radius button">
					<img  src="img/desporto/badminton.png" onerror="this.src='notfound.png'" alt="secção desportiva">
					</a>
					<h2> Badminton </h2>
				</div>

				<!-- Triggers  Basebol -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="base.php?type=desporto&id=4&nome=Basebol" class="radius button">
					<img  src="img/desporto/basebol.png" onerror="this.src='notfound.png'" alt="secção desportiva">
					</a>
					<h2> Basebol </h2>
				</div>

				<!-- Triggers  Basquetbol -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="base.php?type=desporto&id=1&nome=Basquetebol" class="radius button">
					<img  src="img/desporto/basquetebol.png" onerror="this.src='notfound.png'" alt="secção desportiva">
					</a>
					<h2> Basquetebol </h2>
				</div>

				<!-- Triggers Bilhar -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="base.php?type=desporto&id=1&nome=Bilhar" data-reveal-id="bilhar" class="radius button">
					<img  src="img/desporto/bilhar.png" onerror="this.src='notfound.png'" alt="secção desportiva">
					</a>
					<h2>Bilhar </h2>
				</div>


				</div>
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
            $("#inicial").each(function(){
  			$(this).hide();
 	 		$(this).slideDown($(this).outerHeight()*2.5);

    });
    </script>

    </script>

</body>


</html>