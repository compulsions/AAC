<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">
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

    <meta property="fb:app_id"          content="813212112059160" /> 
    <meta property="og:type"            content="news" /> 
    <meta property="og:url"             content="http://localhost/htdocs/noticia.php" />    
    <meta property="og:image" content="img/aac.jpg" />
    <meta property="og:title" content="Noticia X" />
    <meta property="og:description" content="
Diam hendrerit consectetur orci amet euismod quisque hendrerit nisi consequat sodales sed curabitur per rhoncus vitae, ultricies libero risus tincidunt neque taciti hac risus magna in auctor vestibulum torquent aenean. sapien nisi donec massa potenti tellus quam suspendisse, dictumst
  pretium magna volutpat sed fusce eu aenean, donec augue purus leo ornare fames. arcu netus faucibus gravida mauris hac ullamcorper hac venenatis lacus ornare, auctor hendrerit class dapibus tempor scelerisque enim platea ante, ultricies ornare magna nulla vulputate odio augue eget quam. urna 
  lacinia cras convallis ornare vehicula bibendum magna quisque, mauris leo elementum commodo nisi rhoncus adipiscing justo curabitur, gravida ut sed maecenas ornare est dictum. " />

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
<!-- ............................ SECTION DE NOTICIA X............................ -->
	<section>
		<div  id="noticias" class="container cor">
			<div class="tituloNot"><a href="noticias.html"> Notícias </a> > Noticia X</div>
			
			<div id="noticia1" class="col-md-3 centrar">
				<p><img src="img/aac.jpg" alt="noticia" style="width:100%;"></p>
				<div id="share_button">
					<i class="fa fa-facebook-official"></i>
					Partilhar
				</div>
				<!--<a href="javascript:fbShare('img/notfound.php', 'nome', 'Facebook share popup', 'img/notfound.php', 520, 350)">Share</a>-->
			</div>
			<div class="col-md-9 noticia info">
				<p> 	Diam hendrerit consectetur orci amet euismod quisque hendrerit nisi consequat sodales sed curabitur per rhoncus vitae, ultricies libero risus tincidunt neque taciti hac risus magna in auctor vestibulum torquent aenean. sapien nisi donec massa potenti tellus quam suspendisse, dictumst pretium magna volutpat sed fusce eu aenean, donec augue purus leo ornare fames. arcu netus faucibus gravida mauris hac ullamcorper hac venenatis lacus ornare, auctor hendrerit class dapibus tempor scelerisque enim platea ante, ultricies ornare magna nulla vulputate odio augue eget quam. urna lacinia cras convallis ornare vehicula bibendum magna quisque, mauris leo elementum commodo nisi rhoncus adipiscing justo curabitur, gravida ut sed maecenas ornare est dictum. </p>
				<p>	Nibh mollis etiam diam lobortis commodo auctor purus adipiscing venenatis odio, lorem ornare senectus per sed dictumst luctus ligula rhoncus, dolor aptent habitasse curae nam elit mollis habitant diam. aliquam primis ornare suscipit gravida hac fusce venenatis ut, hac aenean ad morbi iaculis rutrum aliquam maecenas ullamcorper, lectus taciti nulla blandit nibh nec ante. hendrerit accumsan lectus dolor litora sollicitudin tincidunt lacinia, arcu venenatis habitasse interdum accumsan lacus, ornare neque in ultricies velit amet. ante quisque egestas imperdiet donec iaculis orci, vehicula est congue elementum proin ullamcorper diam, ultricies faucibus elementum vitae gravida.  </p>
			</div>	
		</div>
	</section>
<!-- .................................................................................... -->
	
<!--............................  FOOTER................................ -->
	<?php
		include 'footer.html';
	?>
<!-- .................................................................................... -->

</body>

<div id="fb-root"></div>
<script>
	window.fbAsyncInit = function() {
	FB.init({appId: '1483877931904022', status: true, cookie: true,
	xfbml: true});
	};
	(function() {
	var e = document.createElement('script'); e.async = true;
	e.src = document.location.protocol +
	'//connect.facebook.net/en_US/all.js';
	document.getElementById('fb-root').appendChild(e);
	}());



	$(document).ready(function(){
		$('#share_button').click(function(e){
			e.preventDefault();
			FB.ui({
				method: 'feed',
				name: 'POMBO NENA TORNA-SE PRESIDENTE DA DG!',
				link: 'http://localhost/AAC/frontend/noticia.php?id=noticia1',
				picture: 'http://diariodigital.sapo.pt/images_content/pombo250712.jpg',
				caption: '',
				description: 'Conferência de imprensa amanha',
				message: ''
				});
			});
		});
</script>


<!-- .................................. -->	
</html>