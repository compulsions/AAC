<?php
    get_header();
?>

    <div>
		<div class="gallery js-flickity"  data-flickity-options='{ "imagesLoaded": true, "percentPosition": false ,"wrapAround": true, "freeScroll": true}'>
		  <img class="homepagefoto" src="<?php echo get_template_directory_uri() . "/img/1.png"?>" alt="..." />
		  <img class="homepagefoto" src="<?php echo get_template_directory_uri() . "/img/1.png"?>" alt="..."s />
		</div>
        
        
		<div class="container titulo">
			<a href="index.php"><img src="<?php echo get_template_directory_uri() . "/img/aac2.png"?>" alt="aac" class="aac2"> </a>
            
			<h1 class="cenas"> Associação Académica de Coimbra </h1> 
				
		</div>
	</div>

    <nav class="site-nav">
					
        <?php
			
			$args = array(
				'theme_location' => 'primary'
			);
			
            wp_nav_menu(  $args ); 
            
        ?>
 
    </nav>

    <div class="noticias">
       <?php  
            $cats = get_categories();
            $cat_id;

            query_posts('cat=3');

            while (have_posts()) : the_post(); 
        ?>
        <div class="col-md-3 col-sm-4 col-xs-6 centrar">
        <article class="noticia cor">
            <h2><a href="<?php the_permalink(); ?>"  class="radius button"><?php the_title(); ?></a></h2>
            <?php 
            if ( has_post_thumbnail() ) {
            echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); } ?>
        </article>
        </div>
            
        <?php
            endwhile;
            wp_reset_query();
        ?>
    </div>

<?php 
    get_footer();
?>