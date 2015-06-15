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

		
<!-- ............................ SECTION DE REPUBLICAS........................... -->

	<section>
		<div class="container cor">
			<div class="tituloPag"> Repúblicas</div>
			<!-- REPUBLICA 1 -->
			<div class="container" id="republica1">
				<div class="subtituloPag"> Republica 1</div>
				<div class="col-md-3">
					<img style="width:100%; margin-bottom:20px;" src="img/aac.jpg">

				</div>
				<div class="info col-md-5">
					<p> 	Diam hendrerit consectetur orci amet euismod quisque hendrerit nisi consequat sodales sed curabitur per rhoncus vitae, ultricies libero risus tincidunt neque taciti hac risus magna in auctor vestibulum torquent aenean. sapien nisi donec massa potenti tellus quam suspendisse, dictumst pretium magna volutpat sed fusce eu aenean, donec augue purus leo ornare fames. arcu netus faucibus gravida mauris hac ullamcorper hac venenatis lacus ornare, auctor hendrerit class dapibus tempor scelerisque enim platea ante, ultricies ornare magna nulla vulputate odio augue eget quam. urna lacinia cras convallis ornare vehicula bibendum magna quisque, mauris leo elementum commodo nisi rhoncus adipiscing justo curabitur, gravida ut sed maecenas ornare est dictum. </p>
				</div>
				<div class="col-md-4">
					<div id="button">
						<i id="font" class="fa fa-chevron-down"></i>  Mapa
					</div>
					<div id="mapa">
						<div id="mapa-1" style="width:100%; height:200px;"></div>
					</div>
				</div>
			</div>
			<!-- ......................  -->
			<!-- REPUBLICA 2-->
			<div class="container" id="republica1">
				<div class="subtituloPag"> Republica 1</div>
				<div class="col-md-3">
					<img style="width:100%; margin-bottom:20px;" src="img/aac.jpg">

				</div>
				<div class="info col-md-5">
					<p> 	Diam hendrerit consectetur orci amet euismod quisque hendrerit nisi consequat sodales sed curabitur per rhoncus vitae, ultricies libero risus tincidunt neque taciti hac risus magna in auctor vestibulum torquent aenean. sapien nisi donec massa potenti tellus quam suspendisse, dictumst pretium magna volutpat sed fusce eu aenean, donec augue purus leo ornare fames. arcu netus faucibus gravida mauris hac ullamcorper hac venenatis lacus ornare, auctor hendrerit class dapibus tempor scelerisque enim platea ante, ultricies ornare magna nulla vulputate odio augue eget quam. urna lacinia cras convallis ornare vehicula bibendum magna quisque, mauris leo elementum commodo nisi rhoncus adipiscing justo curabitur, gravida ut sed maecenas ornare est dictum. </p>
				</div>
				<div class="col-md-4">
					<div id="button">
						<i id="font" class="fa fa-chevron-down"></i>  Mapa
					</div>
					<div id="mapa">
						<div id="mapa-2" style="width:100%; height:200px;"></div>
					</div>
				</div>
			</div>
			<!-- ......................  -->
		
	</section>
<!-- .................................................................................... -->
	
<!--............................  FOOTER................................ -->
	<?php
		include 'footer.html';
	?>
<!-- .................................................................................... -->
</body>


<!-- SCRIPT POR CAUSA DO MAPA -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
	      function initialize() {
	        var lat1 =new google.maps.LatLng(40.2098215,-8.3969105);

	        var mapCanvas1 = document.getElementById('mapa-1');
	        var mapCanvas2 = document.getElementById('mapa-2');

	        var mapOptions1 = {
	          center: lat1 , 
	          zoom: 25,
	          mapTypeId: google.maps.MapTypeId.ROADMAP,
	          keyboardShortcuts: false,
	          streetViewControl: false,
	          mapTypeControl: false
	        };
	        var map1 = new google.maps.Map(mapCanvas1, mapOptions1);
	        var map = new google.maps.Map(mapCanvas2, mapOptions1);
	      
	               
	      var marker = new google.maps.Marker({
	        position: lat1 ,
	        map: map,
	        title: 'Coimbra'
	        });
	      marker.setMap(map1);
	      marker.setMap(map2);
	     }
	    google.maps.event.addDomListener(window, 'load', initialize);
	</script>
<!-- .................................................................................... -->	
</html>