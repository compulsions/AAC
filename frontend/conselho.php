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
		
	</header>
<!-- NAVBAR -->
	<?php
		include 'navbar.html';
	?>
<!--............................  SLIDESHOW + CALENDARIO................................. -->
	<?php
		include 'slideshow.html';
	?>
<!-- .................................................................................... -->


<!--............................  SECTION DE BASE................................. -->
	<section>
		<div class="container cor">
			<div class="subtituloPag"> Conselho Fiscal</div>
				<div class="info">
					<p> O Conselho Fiscal da Associação Académica de Coimbra (CF/AAC) é o órgão fiscalização e de Jurisdição da Associação Académica de Coimbra. O CF/AAC é composto por sete elementos eleitos através do método de Hondt anualmente. </p>
					<br>
					<p><b>Presidente:</b></p>
					<p>Alexandre Henriques</p>
					<br>
					<p><b>Vogais:</b></p>
					<p>Carlos Gomes</p>
					<p>Flávio Tribuna</p>
					<p>João Barroca</p>
					<p>João Neto</p>
					<p>João Costa</p>
					<p>Micael Cordeiro</p>
					<br>
					<p><b>Contacto:</b></p>
					<p>conselho.fiscal@academica.pt</p>

				</div>
			</div>
		</div>
	</section>
<!-- .................................................................................... -->
	

<!--............................  FOOTER................................ -->
	<?php
		include 'footer.html';
	?>
<!-- .................................................................................... -->

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

</body>
</html>