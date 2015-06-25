<?php

	get_header();
	include 'slideshow.php';
	?>

	<section>
		<div class="container cor">
			<div class="tituloPag">

				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
				<div class="col-md-3 info centrar">

				
				<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array('width' => '90%')); ?>


				</div>
				<div class="col-md-8 borderesquerda noticia-cobaia">
					<?php

						if (have_posts()) :
							while (have_posts()) : the_post();
								?>
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