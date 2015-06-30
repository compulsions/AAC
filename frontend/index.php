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
    <link rel="stylesheet" href="css/flickity-docs.css" media="screen" />

	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/flickity-docs.min.js"></script>

</head>
<body>
	
	<header id="header">
		<div class="gallery js-flickity"  data-flickity-options='{ "imagesLoaded": true, "percentPosition": false ,"wrapAround": true, "freeScroll": true}'>
		  <img class="homepagefoto" src="img/1.png" alt="..." />
		  <img class="homepagefoto" src="img/1.png" alt="..." />
		</div>
		<div class="container titulo">
			<a href="index.php"><img src="img/aac2.png" alt="aac" class="aac2"> </a>
			<h1  class="cenas"> Associação Académica de Coimbra </h1> 
				
		</div>
	</header><!-- NAVBAR -->

	<section id="nav">
	<?php
		include 'navbar.html';
	?>
	</section>

<!--............................  SECTION DE BASE................................. -->
<section id="base">
		<div class="container" id="noticias">
			<div id="noticia1" class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
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
			<div id="noticia2" class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
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
      /*$(".noticia").each(function(){
		        		$(this).slideUp();

		        	});
      $("#nav").slideUp();


      $(window).scroll(function() {
      	console.log($(this).scrollTop());
		    if ($(this).scrollTop() > 160) {
		    	$("#nav").slideDown("slow");
		        // apply effects and animations
		       if ($(this).scrollTop() > 200) {
		          	var i=0;
		        	$(".noticia").each(function(){
		        		$(this).slideDown(500+(i*50));
		        		i+=1;

		        	});
		       	   
		       	}
		    }
 		});
*/
 $(".container").each(function(){	
 		$(this).hide();
 		console.log("lel");
		 });
$("#nav").slideUp();
      /* Every time the window is scrolled ... */
$(window).scroll( function(){
	/* Check the location of each desired element */
    $('.container').each( function(i){
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

    $('#nav').each( function(i){
        var top_of_object = $(this).offset().top +200;
        var bottom_of_object = $(this).offset().top + $(this).outerHeight();

        var top_of_window = $(window).scrollTop();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        console.log( top_of_object);
        console.log( bottom_of_window);

        /* If the object is completely visible in the window, fade it in */
        if( bottom_of_window > top_of_object ){
            $(this).slideDown(500);

        }

    }); 

});
    </script>

</body>
</html>