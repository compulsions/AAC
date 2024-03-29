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
    <script src="js/lightbox.min.js"></script>
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
			<div class="tituloPag"> Secções Culturais</div>
			<div class="info  nucleosG">
				
				<!-- Triggers  SOS ESTUDANTE -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="base.php?type=S_culturais&id=1&nome=SOS ESTUDANTE"  class="radius button">
					<img  src="img/seccoes/sos.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> SOS ESTUDANTE </h2>
				</div>
				<!--  ................................. -->
				
			
				<!-- Triggers  grupo ecológico -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="base.php?type=S_culturais&id=2&nome=GRUPO ECOLÓGICO"  class="radius button">
					<img  src="img/seccoes/ecologico.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> GRUPO ECOLÓGICO </h2>
				</div>
				<!--  ................................. -->
				 
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



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- .................................................................................... -->	
</html>