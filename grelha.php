<?php /*
	Template Name: Grelha
	*/

	get_header();

	$number_posts_per_page = 3;

	$cat_id;
	$cats = get_categories( );

	$custom_value = get_post_custom_values('categoria');
	//echo "Custom value desta página: " . $custom_value[0] . "<br>";

	//print_r($cats);

	// ir ver a variável que a página passa
	// comparar com os nomes das categorias
	// só mostrar os posts dessa categoria


	for ($i=0; $i < sizeof($cats); $i++) { 

		//echo "ID: " . $cats[$i]->term_id . " Nome: ". $cats[$i]->name . "<br>";

		if ($cats[$i]->name == $custom_value[0]) {
			//echo "ENCONTREI-O!<br>";
			//echo "ESCOLHIDO - >ID: " . $cats[$i]->cat_id . " Nome: ". $cats[$i]->name . "<br>";
			$cat_id = $cats[$i]->term_id;
		}
	}

	echo "<small>(A Mostrar só algumas categorias)</small>";
	echo "<h2>A mostrar posts da categoria: ". $custom_value[0] . "</h2>";

	// Se estiver na página de notícias, ele só mostra X artigos, e põe paginação (ver abaixo)
	if ($pagename == 'noticias') {

		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
		  'posts_per_page' => $number_posts_per_page,
		  'paged' => $paged,
		  'cat' => $cat_id
		);

		query_posts($args);
	} else {
		//Se estiver noutras páginas, mostra todas as páginas dessa categoria
		query_posts('cat=' . $cat_id);
	}

	if (have_posts()) {

		while (have_posts()) : the_post() ?>

			<article>
				<h2><a href=" <?php the_permalink(); ?>"><?php the_title( ); ?></a></h2>

				<?php if ( has_post_thumbnail() ) {
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
					echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '" >';
					echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); 
					echo '</a>';
				} ?>

				<?php the_content( ); ?>
			</article>

		<?php endwhile; 
			// Zona para a paginação, caso esteja nas notícias
			if ($pagename == 'noticias') { ?>
		
				<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
				<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

		<?php
			}

	} else {
		echo "<p>No content Found</p>";
	}

	wp_reset_query();


	get_footer();
?>