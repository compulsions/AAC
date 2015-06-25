<?php
    get_header();
?>

    <div id="header">
		<div class="gallery js-flickity"  data-flickity-options='{ "imagesLoaded": true, "percentPosition": false ,"wrapAround": true, "freeScroll": true}'>
		  <img class="homepagefoto" src="<?php echo get_template_directory_uri() . "/img/1.png"?>" alt="..." />
		  <img class="homepagefoto" src="<?php echo get_template_directory_uri() . "/img/1.png"?>" alt="..."s />
		</div>
		<div class="container titulo">
			<a href="index.php"><img src="<?php echo get_template_directory_uri() . "/img/aac2.png"?>" alt="aac" class="aac2"> </a>
            
			<h1  class="cenas"> Associação Académica de Coimbra </h1> 
				
		</div>
	</div>

<?php 
    get_footer();
?>