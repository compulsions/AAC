<?php

	get_header();
	include 'navbar.php';
	include 'slideshow.php';
	//$pages = get_pages( );

	//for ($i=0; $i < sizeof($pages); $i++) { 
		//echo "<p>" . $pages[$i]->guid . '</p>';
	//}
?>

	<section>
		<div class="container cor">
			<div class="tituloPag">

				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
				<div class="col-md-3 info centrar">

				
				<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array('width' => '90%'));?>


				</div>
				<div class="col-md-8 borderesquerda noticia-cobaia">
					<?php

						if (have_posts()) :
							while (have_posts()) : the_post();

								
								?>
							

								<p>
								<?php 
									//$pages = get_pages( ); 
									//echo $pages[5]->guid;
								?>
								</p>
								<p><?php the_content(); ?></p>

								<?php
							
							endwhile;
							
							else :
								echo '<p>No content found</p>';
							
							endif;

					?>
	
				</div>

		</div>

	</section>
	
	<?php
	get_footer();

?>