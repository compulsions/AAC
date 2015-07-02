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
			
			include 'navbar.php';
        ?>
 
    </nav>

    <div class="container noticias">
       <?php  
            $number_posts_per_page = 3;

            $cats = get_categories();
            $cat_id = 3;

            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
		  'posts_per_page' => $number_posts_per_page,
		  'paged' => $paged,
		  'cat' => $cat_id
		);

		query_posts($args);

        while (have_posts()) : the_post(); 
        ?>
        <div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 centrar">
        <article class="noticia carrega cor">
            <h2><a href="<?php the_permalink(); ?>"  class="radius button"><?php the_title(); ?></a></h2>
            <?php 
            if ( has_post_thumbnail() ) {
            echo get_the_post_thumbnail( $post->ID, 'medium' ); } ?>
        </article>
        </div>
            
        <?php
            endwhile;
        ?>

        <div class="botoes">

            <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
            <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

        </div>
    </div>
<?php 
    wp_reset_query();
    get_footer();
?>