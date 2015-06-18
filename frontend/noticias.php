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
	<section>
<!--............................  SLIDESHOW + CALENDARIO................................. -->
	<?php
		include 'slideshow.html';
	?>
<!-- .................................................................................... -->
</section>
<!-- ............................ SECTION DE NOTICIAS............................ -->

		<div  id="noticias" class="container centrar cor" style="padding-bottom:20px; margin-top:20px;" >
			<div style="widht:100%;">
				<div class="tituloPag"> Notícias</div>
			</div>



		</div>
		<br>
		<div class="container padding">
			<div id="noticia1" class="col-md-3 col-sm-4 col-xs-6 col-xxs-12 blockR">
				<div class="noticia noticia-block cor">
				<a href="noticia.html?id=noticia1">
					<div class="nomeNoticia">
						<p> NENA VAI TORNAR-SE PRESIDENTE!!!</p>
					</div>
					<div class="img_noticia_ver">
						<img src="img/aac.jpg" alt="noticia"></a>
					</div>
					<p> Eu criei duas classes diferentes para quando tiver imagens horizontais ou verticais e corta-las de modo a ficar com uma tamanho sem esticar.</p>
					<a class="lermais" href="#"> Ler mais </a>
					</div>	
			</div>
			<div id="noticia2" class="col-md-3 col-sm-4 col-xs-6 col-xxs-12 blockR">
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
<!--............................  FOOTER................................ -->
	<?php
		include 'footer.html';
	?>
<!-- .................................................................................... -->
    <script>

 $("section").each(function(){
 	if ($(this).offset().top > $(window).height()){	
 			$(this).hide();
 		}
    });
 $(".noticia").each(function(){
 	if ($(this).offset().top > $(window).height()){	
 			$(this).hide();
 		}
    });
      /* Every time the window is scrolled ... */
   $(window).scroll( function(){
	/* Check the location of each desired element */
    $('section').each( function(i){
        var top_of_object = $(this).offset().top +400;
        var bottom_of_object = $(this).offset().top + $(this).outerHeight();

        var top_of_window = $(window).scrollTop();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        console.log( top_of_object);
        console.log( bottom_of_window);

        /* If the object is completely visible in the window, fade it in */
        if( bottom_of_window > top_of_object ){
            $(this).slideDown(1800);

        }

    }); 
    $('.noticia').each( function(i){
        var top_of_object = $(this).offset().top +400;
        var bottom_of_object = $(this).offset().top + $(this).outerHeight();

        var top_of_window = $(window).scrollTop();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        console.log( top_of_object);
        console.log( bottom_of_window);

        /* If the object is completely visible in the window, fade it in */
        if( bottom_of_window > top_of_object ){
            $(this).slideDown(1800);

        }

    }); 

});
    </script>

</body>


</html>