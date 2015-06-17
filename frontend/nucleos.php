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
<section>
<!--............................  SLIDESHOW + CALENDARIO................................. -->
	<?php
		include 'slideshow.html';
	?>
<!-- .................................................................................... -->
</section>
<!--............................  SECTION DE BASE................................. -->
	<section>
		<div class="container cor">
			<div class="tituloPag"> Núcleos</div>
			<div class="info  nucleosG">
				<!-- Triggers  NEA antropologia -->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="base.php?type=nucleos&id=1&nome=NEA/AAC" class="radius button">
					<img  src="img/nucleos/nea.png" onerror="this.src='notfound.png'" alt="nucleo">
					</a>
					<h2> NEA / AAC </h2>
				</div>

				<!--  ................................. -->
				<!-- Triggers  N  administração publico privada-->
				<div class="col-md-3 col-sm-4 col-xs-6 centrar">
					<a href="base.php?type=nucleos&id=1&nome=NEAPP/AAC" data-reveal-id="NEAPP" class="radius button">
					<img src="img/nucleos/neapp.png" onerror="this.src='notfound.png'" alt="nucleo">
					</a>
					<h2> NEAPP / AAC </h2>
				</div>

				
				  <br>
				</div>
			</div>
		</div>

	</section>
<!-- .................................................................................... -->
	

   <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    $(window).load(function() {
	   $("section").each(function(){
	 	if ($(this).offset().top > $(window).height()){	
	 			$(this).hide();
	 		}else{
	 			$(this).slideDown(1800);
	 		}
	    });
	   )};
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

});
    </script>

 

</body>
<!--............................  FOOTER................................ -->
	<?php
		include 'footer.html';
	?>
<!-- .................................................................................... -->
<!-- .................................................................................... -->	
</html>