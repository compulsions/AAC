<?php

	get_header();
	include 'navbar.php';
	include 'slideshow.php';
	$pages = get_pages( );
	$cat = get_the_category();
	$link_to_previous;

	//echo "categoria desta página: " . $cat[0]->name;

	foreach ($pages as $p) {
		//echo "<p>" . get_the_title( $pages[$i]->ID ) . '</p>';

		if ($cat[0]->name == get_the_title( $p->ID )) {
			//echo "encontrei o escolhido!!<br>";
			//echo get_page_link($pages[$i]->ID);
			$link_to_previous = get_page_link($p->ID);
		}
	}

?>

	<section>
		<div class="container cor">
			<div class="tituloPag">
			
				<a href="<?php echo $link_to_previous ?>">BACK</a>
				<a href=""><?php echo $cat[0]->name; ?> > <?php the_title(); ?></a>
				
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