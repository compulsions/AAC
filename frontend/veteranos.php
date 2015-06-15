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
			<div class="subtituloPag"> Conselho de Veteranos</div>
				<div class="col-md-8">
					<div class="info">
						<p>O Conselho de Veteranos da Universidade de Coimbra – Magnum Concilium Veteranorum – é uma assembleia constituída exclusivamente por veteranos, em número mínimo de 9, e reúne mediante um “Convocatio” a afixar na porta principal da A.A.C. e na porta da sala Sr. Xico,com pelo menos 8horas de antecedência, devendo esta ser escrita em latim “macarrónico” e assinada pelo Dux Veteranorum. Se após 60 minutos da hora marcada para a reunião do Conselho de Veteranos, não houver quorum, esta fica adiada por 24 horas. As deliberações tomadas são tornadas públicas em “Decretus”, também escrito em latim “macarrónico” e assinado pelo Dux Veteranorum, assim como pelos veteranos presentes na reunião do Conselho de Veteranos.</p>
						<p>O Conselho de Veteranos é o órgão supremo da Sociedade Académica, retendo simultaneamente poder executivo e legislativo. É, teoricamente, fonte de toda a autoridade académica, pois é nele que se concentra todo o poder de decisão e interpretação da PRAXE ACADÉMICA da UNIVERSIDADE de COIMBRA. Tem também a função de órgão de recurso, sempre que se verifique algum atropelo na aplicação da Praxe.</p>
						<p>Ao Conselho de Veteranos compete tomar todas as decisões relacionadas com a PRAXE, que achar oportunas e aconselháveis, legislando nos casos omissos. O Conselho de Veteranos é presidido pelo Dux Veteranorum, a quem também compete presidir a todos os movimentos académicos que visem salvaguardar o prestígio da PRAXE.</p>
						<br>
						<p>Edifício Associação Académica de Coimbra</p>
						<p>Rua Padre António Vieira</p>
						<p>Sala Sr. Xico</p>
						<p>3000-315 Coimbra</p>
						
						<br>
						<p>e-mail: cveteranos@gmail.com</p>
						<p>tel: 239 410 409</p>
						<br>
						<a href="http://mcv.aac.uc.pt/" target="_blank;">
							<i class="fa fa-plus fa-2x" style="color:black"></i>
						</a>

					</div>
				</div>
			<div class="col-md-4">
					<img style="width:70%;" src="img/veteranos.jpg">
			</div>
		</div>

	</section>
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