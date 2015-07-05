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

	//echo "categoria deste post: " . $cat[0]->name;
	//print_r($cat);

?>

	<section>
		<?php if ($cat[0]->name != 'Direção-Geral') { ?>

			<div class="container cor">
				<div class="tituloPag">

					<a href="<?php echo $link_to_previous ?>">BACK</a>
					<a href=""><?php echo $cat->name; ?> > <?php the_title(); ?></a>

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

			<?php
		} else {
			// Se for da categoria da Direção Geral
			$cat_id;
		   $cats = get_categories( );

		   $custom_value = $cat[0]->name;
		   //echo "Custom value desta página: " . $custom_value[0] . "<br>";
		   //print_r($cats);

		   // ir ver a variável que a página passa
		   // comparar com os nomes das categorias
		   // só mostrar os posts dessa categoria

		   foreach ($cats as $cat) {
		   	//echo "ID: " . $cat->term_id . " Nome: ". $cat->name . "<br>";

		   	if ($cat->name == $custom_value) {
		   		//echo "ENCONTREI-O!<br>";
		         //echo "ESCOLHIDO - >ID: " . $cat->cat_id . " Nome: ". $cat->name . "<br>";
		   		$cat_id = $cat->term_id;
		   	}
		   }
			query_posts(array('cat' =>$cat_id, 'posts_per_page' => -1));

			?>

			<div class="container">

		      <div class="col-md-3 col-sm-3 col-xs-12 caixa_branca barralado carrega">
		         <ul>

		            <?php
		            if (have_posts()) {
		               while (have_posts()) : the_post(); ?>

		                  <li><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>

		               <?php endwhile;
		            }

		            wp_reset_query();
		            ?>

		         </ul>
		      </div>

		      <div class="col-md-8 col-sm-8 col-xs-12 caixa_branca">

		         <?php
		         if (have_posts()) {
		            while (have_posts()) : the_post();
		               the_content();
		            endwhile;
		         }
		         ?>

		      </div>
		   </div>

		<?php
		} ?>

	</section>

	<?php
	get_footer();

?>
