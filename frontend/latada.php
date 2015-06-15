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
			<div class="subtituloPag">Festa das Latas e Imposição de Insígnias</div>
				<div class="info">
					<p>A Festa das Latas e Imposição de Insígnias é a primeira festa académica dos recém chegados a Coimbra. Com origens no século XIX, a Festa das Latas nem sempre foi comemorada como agora. Inicialmente, cada faculdade tinha o seu próprio cortejo, realizado em dias diferentes do mês de maio, para celebrar o fim da época de exames. Atualmente, a Latada, como é chamada, tem o seu início com a Serenata e o cortejo é o ponto alto da semana, onde os “caloiros” desfilam em trajes escolhidos pelos “doutores” que aproveitam para enviar mensagens satíricas à sociedade.</p>
					<p>A Latada é antecedida por atividades desportivas e culturais, como concurso de bandas e campeonatos universitários, que pretendem despertar o espírito de festa nos estudantes e aproximá-los da Academia.</p>
					<p>As sete Noites de Parque enchem a Praça da Canção com estudantes universitários e não universitários, de Coimbra e de fora, para ouvir as várias bandas que preenchem os cartazes ano após ano.</p>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6">
					<p> 2014 </p>
					<a href="img/latada/l2014.png" data-lightbox="image-1">
						<img src="img/latada/l2014.png" alt="latada" style="width:100%;" class="cartaz">
					</a>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6">
					<p> 2013 </p>
					<a href="img/latada/l2013.png" data-lightbox="image-1">
						<img src="img/latada/l2013.png" alt="latada" style="width:100%;" class="cartaz">
					</a>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6">
					<p> 2012 </p>
					<a href="img/latada/l2012.png" data-lightbox="image-1">
						<img src="img/latada/l2012.png" alt="latada" style="width:100%;" class="cartaz">
					</a>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6">
					<p> 2011 </p>
					<a href="img/latada/l2011.png" data-lightbox="image-1">
						<img src="img/latada/l2011.png" alt="latada" style="width:100%;" class="cartaz">
					</a>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6">
					<p> 2010 </p>
					<a href="img/latada/l2010.png" data-lightbox="image-1">
						<img src="img/latada/l2010.png" alt="latada" style="width:100%;" class="cartaz">
					</a>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6">
					<p> 2009 </p>
					<a href="img/latada/l2009.png" data-lightbox="image-1">
						<img src="img/latada/l2009.png" alt="latada" style="width:100%;" class="cartaz">
					</a>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6">
					<p> 2008 </p>
					<a href="img/latada/l2008.png" data-lightbox="image-1">
						<img src="img/latada/l2008.png" alt="latada" style="width:100%;" class="cartaz">
					</a>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6">
					<p> 2005 </p>
					<a href="img/latada/l2005.png" data-lightbox="image-1">
						<img src="img/latada/l2005.png" alt="latada" style="width:100%;" class="cartaz">
					</a>
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