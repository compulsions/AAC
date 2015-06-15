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

      <script
		src="http://maps.googleapis.com/maps/api/js">
	</script>



	<script>
		function initialize() {
			var myLatlng= new google.maps.LatLng(40.209719,-8.421134);
		  var mapProp = {
		    center: myLatlng,
		    zoom:15,
		    mapTypeId:google.maps.MapTypeId.ROADMAP
		  };
		  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);

		  var marker = new google.maps.Marker({
		      position: myLatlng,
		      map: map,
		      title: 'Direção Geral'
		  });
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
   
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
			<div class="subtituloPag">Contactos</div>
				<div class="info">
					<p>Morada: Rua Padre António Vieira 3000-315 Coimbra</p>
					<p>Email: geral@academica.pt</p>
					<p>Telefone: 239410400   |    Fax GERAL: 239410439   |   Telefone UNIVA: 239 410 455    |    Fax UNIVA: 239410497   |   Fax CTP: 239410498</p>
					<br>
					<p><b>Horários de Funcionamento:</b></p>
					<p>Secretaria: 09h30 às 13h00 / 14h30 às 19h00</p>
					<p>Papelaria/Reprografia: 09h30 às 19h30</p>
					<p>Gabinete das Saídas Profissionais: 09h30 às 12h30 /13h30 às 17h30</p>
					<p>Tesouraria: 14h30 às 17h30</p>
					<p>Contabilidade: 10h00 às 11h30 / 14h30 às 17h30</p>
					<p>Loja Ponto Já: 09h30 às 12h30 / 14h00 às 18h00</p>
					</p>
					<br>
					<div id="googleMap" style="width:500px;height:380px;"></div>
				</div>
			</div>
		</div>
	</section>

<!-- .................................................................................... -->
	

<!--............................  FOOTER................................ -->

<!-- FOOTER -->
	<?php
		include 'footer.html';
	?>
<!-- ..................... -->	
<!-- .................................................................................... -->

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

</body>

</html>
