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
			<div class="info  nucleos">
				
				<!-- Triggers  SOS ESTUDANTE -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="#" data-reveal-id="sos" class="radius button">
					<img  src="img/seccoes/sos.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> SOS ESTUDANTE </h2>
				</div>

				<!-- SOS -->
				<div id="sos" class="reveal-modal" data-reveal>
				  <h2>SOS Estudante</h2>
				  	<img style="width:30%;" src="img/seccoes/sos.png"  onerror="this.src='notfound.png'" alt="secção cultural">








				  	<a class="close-reveal-modal">&#215;</a>
				</div>

				<!--  ................................. -->
				
			
				<!-- Triggers  grupo ecológico -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="#" data-reveal-id="ecologico" class="radius button">
					<img  src="img/seccoes/ecologico.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> GRUPO ECOLÓGICO </h2>
				</div>

				<!-- ECOLOGICO -->
				<div id="ecologico" class="reveal-modal" data-reveal>
				  <h2>Grupo Ecológico</h2>
				  	<img style="width:30%;" src="img/seccoes/ecologico.png"  onerror="this.src='notfound.png'" alt="secção cultural">







				  	<a class="close-reveal-modal">&#215;</a>
				</div>
				<!--  ................................. -->

				
				
			
				<!-- Triggers FADO -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="#" data-reveal-id="fado" class="radius button">
					<img  src="img/seccoes/fado.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> SECÇÃO DE FADO </h2>
				</div>

				<!-- SECÇÃO DE FADO -->
				<div id="fado" class="reveal-modal" data-reveal>
				  <h2>Secção de Fado</h2>
				  	<img style="width:30%;" src="img/seccoes/fado.png"  onerror="this.src='notfound.png'" alt="secção cultural">








				  	<a class="close-reveal-modal">&#215;</a>
				</div>
				<!--  ................................. -->

				
				
				<!-- Triggers  CENTRO DE INFORMÁTICA -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="#" data-reveal-id="informatica" class="radius button">
					<img  src="img/seccoes/informatica.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> CENTRO DE INFORMÁTICA </h2>
				</div>

				<!-- CENTRO DE INFORMÁTICA -->
				<div id="informatica" class="reveal-modal" data-reveal>
				  <h2>Centro de Informática</h2>
				  	<img style="width:30%;" src="img/seccoes/informatica.png"  onerror="this.src='notfound.png'" alt="secção cultural">








				  	<a class="close-reveal-modal">&#215;</a>
				</div>
				<!--  ................................. -->

					<!-- Triggers  FILATÉLICA -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="#" data-reveal-id="filatelica" class="radius button">
					<img  src="img/seccoes/filatelica.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> SECÇÃO FILATÉLICA </h2>
				</div>

				<!-- SECÇÃO FILATÉLICA -->
				<div id="filatelica" class="reveal-modal" data-reveal>
				  <h2>Secção Filatélica</h2>
				  	<img style="width:30%;" src="img/seccoes/filatelica.png"  onerror="this.src='notfound.png'" alt="secção cultural">
				  	<p>No dia 23 de fevereiro de 1965, foi fundada a Secção Filatélica da AAC por um grupo de estudantes universitários que tinham em comum o facto de serem filatelistas, passando a funcionar a título provisório, dada a ausência de um espaço próprio, na sala de Reuniões da DG/ AAC. Os seus primeiros diretores foram Luís Francisco Augusto, Paulo Proença e Américo Borges.</p>
					<p>Nos primeiros tempos de existência, a Secção funcionou também com um setor de numismática e com outro de filumenismo, entretanto desaparecidos.</p>
					<p>Em 1967, surgia o primeiro número do Boletim Filatélico, que foi a nossa primeira publicação literária. A primeira atividade de vulto realizada foi a Exposição Filatélica e Filumenística Estudantes Universitários em 1967.</p>
					<p>Em 1969, a Secção organizou a VII Exposição Filatélica Nacional – AEMIPEX 69, que logrou alcançar um êxito retumbante, e constituí o principal motivo de orgulho deste historial. Os CTT emitiram um carimbo comemorativo para cada dia do certame, perfazendo um total de 8 carimbos. Nesse mesmo ano de 1969, a Secção Filatélica e a Secção de Fotografia da altura foram as únicas secções culturais (a par de algumas desportivas) que estiveram na base do início da luta estudantil, conhecida como Crise de 69.</p>
					<p>Diversas mostras filatélicas foram sendo realizadas ao longo dos tempos.</p>
					<p>Em 1977, foi fundado o Clube de Colecionadores de Carimbos Comemorativos (C.C.C.C.), que é atualmente o único clube da especialidade em Portugal, possuindo um vasto stock de carimbos emitidos nas últimas décadas. Este feito marca o início de um período de bastante dinâmica e criatividade na história da Secção.</p>
					<p>Em 1982, surgia o primeiro número da revista “Cábula Filatélica”, publicação que se mantém até aos dias de hoje, com alguns períodos de interrupção. Esta revista já ganhou diversos prémios em exposições realizadas no país e no exterior, entre os quais salientamos a Medalha de Prata obtida na “Lubrapex 84″, bem como na “Lubrapex 82″ no Brasil e na exposição internacional “Miladost 84″, na Bulgária.</p>
					<p>Nesse ano, foi ainda publicado o “Catálogo de Carimbos Comemorativos de Portugal Continental e Ilhas (1977-1981)”. Foram editados ainda o Catálogo de Carimbos Comemorativos de Portugal (1982 – 1998) e o Catálogo de Carimbos Comemorativos de Portugal (1999 – 2004).</p>
					<p>Em 2007 realizou o seu 1º leilão filatélico.</p>
					<p>Hoje, a Secção Filatélica, com um número total de mais de um milhar sócios, mantém regularmente um conjunto de iniciativas que levam a todo o país e ao estrangeiro o nome da AAC, da Universidade de Coimbra e da Cidade de Coimbra. Entre essas iniciativas devem destacar-se então as já referidas mostras filatélicas, a revista “Cábula Filatélica”, intercâmbios com clubes filatélicos nacionais e estrangeiros, estímulo ao coleccionismo filatélico, sessões de trocas filatélicas, etc.</p>
					<p>A Secção Filatélica tem assento na Federação Portuguesa de Filatelia, fazendo parte dos seus órgãos sociais ao longo da história, e alguns dos nossos associados já foram premiados em exposições do maior prestígio internacional.</p>
					<br>
					<p><b>Contacto:</b></p>
					<p>filatelica@academica.pt</p>
					<p>leilao_sfaac@sapo.pt</p>
					<p>239 410 404</p>
					<br>
					<p><b>Localização:</b></p>
					<p>Secção Filatélica da Associação Académica de Coimbra</p>
					<p>Apartado 1094 – EC Santa Cruz</p>
					<p>3000-501 Coimbra</p>

					<a href="HTTP://FILATELICA.AAC.UC.PT/" target="_blank;">
					<i class="fa fa-plus fa-2x" style="color:black"></i>
					</a>
					<a href="HTTP://SFAAC-FILATELIA.BLOGSPOT.PT/" target="_blank;">
					<i class="fa fa-plus fa-2x" style="color:black"></i>
					</a>

				  	<a class="close-reveal-modal">&#215;</a>
				</div>

				<!--  ................................. -->

				<!-- Triggers  gastronomia -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="#" data-reveal-id="gastronomia" class="radius button">
					<img  src="img/seccoes/gastronomia.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> SECÇÃO DE GASTRONOMIA </h2>
				</div>

				<!-- GASTRONOMIA -->
				<div id="gastronomia" class="reveal-modal" data-reveal>
				  <h2>Secção de Gastronomia</h2>
				  	<img style="width:30%;" src="img/seccoes/gastronomia.png"  onerror="this.src='notfound.png'" alt="secção cultural">








				  	<a class="close-reveal-modal">&#215;</a>
				</div>
				<!--  ................................. -->
			
				
				<!-- Triggers  SESLA -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="#" data-reveal-id="sesla" class="radius button">
					<img  src="img/seccoes/sesla.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> SECÇÃO DE ESCRITA E LEITURA </h2>
				</div>

				<!-- SESLA -->
				<div id="sesla" class="reveal-modal" data-reveal>
				  <h2>Secção de Escrita e Leitura</h2>
				  	<img style="width:30%;" src="img/seccoes/sesla.png"  onerror="this.src='notfound.png'" alt="secção cultural">
				  	<p> A SESLA-AAC é uma secção cultural da AAC que visa a promoção e divulgação da escrita e da leitura, com recurso, nomeadamente, a clubes de leitura e a formações de escrita (académica, criativa, entre outros estilos). Reactivada em 2012, atravessa períodos de intensa actividade e divulgação cultural, com o intuito de enriquecer culturalmente a e assim contribuir para o desenvolvimento sustentável da cidade de Coimbra e da restante sociedade em geral.</p>
				  	<p>A nova Direcção, que tomou posse a 24 de Abril do presente ano, tomou por prioridade a criação de plataformas electrónicas que facilitem a interacção entre a Secção e a comunidade académica, bem como a aposta formativa nos vários domínios da escrita e da leitura, em consonância com o que já vinha sendo prática das anteriores Direcções. A Todos deixamos o convite aberto de nos conhecerem e integrarem uma equipa dinâmica, heterogénea e dedicada à cultura.</p>
				  	<br>
					<p><b>Contacto:</b></p>
					<p>geral@sesla.org</p>
					<br>
					<p><b>Localização:</b></p>
					<p>Rés-do-Chão do Edifício da Associação Académica de Coimbra</p>

					<a href="https://www.facebook.com/aac.sesla?fref=ts" target="_blank;">
					<i class="fa fa-facebook-square fa-2x" style="color:black"></i>

				  	<a class="close-reveal-modal">&#215;</a>
				</div>

				<!--  ................................. -->
				
			

			
				
				<!-- Triggers  FOTOGRAFIA -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="#" data-reveal-id="fotografia" class="radius button">
					<img  src="img/seccoes/fotografia.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> SECÇÃO DE FOTOGRAFIA </h2>
				</div>

				<!-- SECÇÃO FOTOGRAFIA -->
				<div id="fotografia" class="reveal-modal" data-reveal>
				  <h2>Secção de Fotografia</h2>
				  	<img style="width:30%;" src="img/seccoes/fotografia.png"  onerror="this.src='notfound.png'" alt="secção cultural">
				  	<p>Incentivados pelos presidentes da DG AAC, Humberto Martins e posteriormente Victor Hugo Salgado, um grupo de estudantes em colaboração com profissionais da fotografia organizaram-se e elaboraram um projecto para a criação de uma Secção de Fotografia na AAC.</p>

					<p>Em 2005, designados por Grupo de Fotografia, uma equipa auxiliada pelo fotógrafo Paulo Abrantes realizou diversas actividades e desenvolveu interessantes parcerias com as sucessivas Direcções Gerais. Também nesta fase foi fundamental o impulso da Comissão Executiva do Conselho Cultural. </p>

					<p>Este grupo de trabalho apresentou regularmente actividades sendo que em Novembro de 2006, por unanimidade, o Conselho Cultural da AAC reconheceu a Pró_Secção de Fotografia.</p>

					<p>Motivados por este reconhecimento a Pro-Secção trabalhou com ainda mais vigor e, em Dezembro de 2007, o Conselho Cultural da AAC vota favoravelmente a criação da Secção de Fotografia, sendo esta a 16ª secção cultural da AAC, colmatando desta forma a ausência da arte fotográfica dentro da Associação Académica de Coimbra.</p>

					<p>A Secção de Fotografia da AAC foi distinguida como Secção do Ano, nas Galas António Luís Gomes 2009 e 2010, prémio para a Secção que mais se distinguiu das outras Secções na sua actividade regular. Em 2011, o Prémio Formação distinguiu as actividades formativas da Secção de Fotografia AAC.</p>

					<p>A Secção de Fotografia AAC, pela sua contínua inclusão da formação nas suas actividades anuais e pelo contributo que tem dado no ensino da fotografia, nomeadamente no processo digital através de reconhecidos eventos pedagógicos, foi convidada a fazer parte da CT174 – Comissão Técnica de Fotografia 2015.</p>

					<br>
					<p><b>Contacto:</b></p>
					<p>sfotografia.aac@gmail.com</p>
					<br>
					<p><b>Localização:</b></p>
					<p>Edifício da Associação Académica de Coimbra</p>

					<a href="https://www.facebook.com/AACfotografia" target="_blank;">
					<i class="fa fa-facebook-square fa-2x" style="color:black"></i>
					</a>
					<a href="https://twitter.com/fotografia_AAC" target="_blank;">
					<i class="fa fa-twitter-square fa-2x" style="color:black"></i>
					</a>
					<a href="https://www.fotografia-aac.pt" target="_blank;">
					<i class="fa fa-plus fa-2x" style="color:black"></i>
					</a>
					

				  	<a class="close-reveal-modal">&#215;</a>
				</div>

				<!--  ................................. -->
				
				<!-- Triggers  JORNALISMO -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="#" data-reveal-id="jornalismo" class="radius button">
					<img  src="img/seccoes/jornalismo.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> SECÇÃO DE JORNALISMO </h2>
				</div>

				<!-- SECÇÃO JORNALISMO -->
				<div id="fotografia" class="reveal-modal" data-reveal>
				  <h2>Secção de Jornalismo</h2>
				  	<img style="width:30%;" src="img/seccoes/jornalismo.png"  onerror="this.src='notfound.png'" alt="secção cultural">








				  	<a class="close-reveal-modal">&#215;</a>
				</div>

				<!--  ................................. -->
				
				<!-- Triggers  TVAAC -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="#" data-reveal-id="tvaac" class="radius button">
					<img  src="img/seccoes/tvaac.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> TVAAC </h2>
				</div>

				<!-- TVAAC -->
				<div id="tvaac" class="reveal-modal" data-reveal>
				  <h2>TVAAC</h2>
				  	<img style="width:30%;" src="img/seccoes/tvaac.png"  onerror="this.src='notfound.png'" alt="secção cultural">
				  	<iframe width="560" height="340" src="http://cdn.livestream.com/embed/tvaac?layout=4&amp;height=340&amp;width=560&amp;autoplay=false" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe><div style="font-size: 11px;padding-top:10px;text-align:center;width:560px"><a href="http://original.livestream.com/tvaac?utm_source=lsplayer&amp;utm_medium=embed&amp;utm_campaign=footerlinks" title="Watch tvaac">tvaac</a> on livestream.com. <a href="http://original.livestream.com/?utm_source=lsplayer&amp;utm_medium=embed&amp;utm_campaign=footerlinks" title="Broadcast Live Free">Broadcast Live Free</a></div>
					<br>
					<a href="https://www.facebook.com/tvAAC?fref=ts" target="_blank;">
					<i class="fa fa-facebook-square fa-2x" style="color:black"></i>
					</a>
					<a href="http://tv.aac.uc.pt/" target="_blank;">
					<i class="fa fa-plus fa-2x" style="color:black"></i>
					</a>


				  	<a class="close-reveal-modal">&#215;</a>
				</div>

				<!--  ................................. -->

					<!-- Triggers  RUC -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="#" data-reveal-id="ruc" class="radius button">
					<img  src="img/seccoes/ruc.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> RÁDIO UNIVERSIDADE DE COIMBRA </h2>
				</div>

				<!-- RUC -->
				<div id="ruc" class="reveal-modal" data-reveal>
				  <h2>Rádio Universidade de Coimbra</h2>
				  	<img style="width:30%;" src="img/seccoes/ruc.png"  onerror="this.src='notfound.png'" alt="secção cultural">
				  	<a href="https://www.facebook.com/Ruc107.9Fm?fref=ts" target="_blank;">
					<i class="fa fa-facebook-square fa-2x" style="color:black"></i>
					</a>
					<a href="http://www.ruc.pt/wp-content/themes/ruc/player.php" target="_blank;">
					<i class="fa fa-plus fa-2x" style="color:black"></i>
					</a>







				  	<a class="close-reveal-modal">&#215;</a>
				</div>

				<!--  ................................. -->

				<!-- Triggers  CINEMATOGRAFICOS -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="#" data-reveal-id="cinematograficos" class="radius button">
					<img  src="img/seccoes/cinematograficos.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> CENTRO DE ESTUDOS CINEMATOGRÁFICOS </h2>
				</div>

				<!-- SECÇÃO CINEMATOGRAFICOS -->
				<div id="cinematograficos" class="reveal-modal" data-reveal>
				  <h2>Centro de Estudos Cinematográficos</h2>
				  	<img style="width:30%;" src="img/seccoes/cinematograficos.png"  onerror="this.src='notfound.png'" alt="secção cultural">








				  	<a class="close-reveal-modal">&#215;</a>
				</div>

				<!--  ................................. -->




					<!-- Triggers  YOGA -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="#" data-reveal-id="yoga" class="radius button">
					<img  src="img/seccoes/yoga.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> SECÇÃO EXPERIMENTAL DE YOGA </h2>
				</div>

				<!-- SECÇÃO EXPERIMENTAL DE YOGA -->
				<div id="yoga" class="reveal-modal" data-reveal>
				  <h2>Secção Experimental de Yoga</h2>
				  	<img style="width:30%;" src="img/seccoes/yoga.png"  onerror="this.src='notfound.png'" alt="secção cultural">








				  	<a class="close-reveal-modal">&#215;</a>
				</div>


				<!--  ................................. -->

				<!-- Triggers  DIREITOS HUMANOS -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="#" data-reveal-id="direitos" class="radius button">
					<img  src="img/seccoes/direitos.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> SECÇÃO DE DEFESA DOS DIREITOS HUMANOS </h2>
				</div>

				<!-- SECÇÃO DE DEFESA DOS DIREITOS HUMANOS -->
				<div id="direitos" class="reveal-modal" data-reveal>
				  <h2>Secção de Defesa dos Direitos Humanos</h2>
				  	<img style="width:30%;" src="img/seccoes/direitos.png"  onerror="this.src='notfound.png'" alt="secção cultural">
					<p>A Secção de Defesa dos Direitos Humanos é uma secção cultural da Associação Académica de Coimbra. Temos como objetivos a denúncia de violações dos Direitos Humanos e a sensibilização para os mesmos através do desenvolvimento de projetos para consciencializar e informar os estudantes e a restante população. Somos uma secção composta por estudantes universitários, que acreditamos que podemos dar um contributo a Coimbra e, prova disso, são as parcerias com outras organizações da cidade. Somos uma equipa empreendedora cujos valores são a responsabilidade e organização.</p>
					<p>As reuniões de sócios são semanais. Todas as terças às 21h30 na nossa sala (Edifício da AAC, 4º piso, sala 13).</p>
					<p>Data da Fundação: 1997</p>
					<p>Número atual de sócios: 50</p>

					<br>
					<p><b>Contacto:</b></p>
					<p>sddhaaccoimbra@gmail.com</p>
					<br>
					<p><b>Localização:</b></p>
					<p>Rua Padre António Vieira, Edifício da Associação Académica de Coimbra, 4º piso, sala 13</p>

					<a href="https://www.facebook.com/sddhaac" target="_blank;">
					<i class="fa fa-facebook-square fa-2x" style="color:black"></i>
					</a>
					<a href="http://www.direitoshumanos.aac.uc.pt/" target="_blank;">
					<i class="fa fa-plus fa-2x" style="color:black"></i>
					</a>
					
				  	<a class="close-reveal-modal">&#215;</a>
				</div>

				<!--  ................................. -->

					<!-- Triggers  ASTRONOMIA -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="#" data-reveal-id="astrofisica" class="radius button">
					<img  src="img/seccoes/astrofisica.png" onerror="this.src='notfound.png'" alt="secção cultural">
					</a>
					<h2> SECÇÃO DE ASTRONOMIA, ASTROFÍSICA E ASTRONÁUTICA </h2>
				</div>

				<!-- SECÇÃO ASTRONOMIA -->
				<div id="astrofisica" class="reveal-modal" data-reveal>
				  <h2>Secção de Astronomia, Astrofísica e Astronáutica</h2>
				  	<img style="width:30%;" src="img/seccoes/astrofisica.png"  onerror="this.src='notfound.png'" alt="secção cultural">








				  	<a class="close-reveal-modal">&#215;</a>
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