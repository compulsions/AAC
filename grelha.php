<?php /*
	Template Name: Grelha
	*/


	$number_posts_per_page = 3;

	$cat_id;
	$cats = get_categories( );

	$custom_value = get_post_custom_values('categoria');
	//echo "Custom value desta página: " . $custom_value[0] . "<br>";
	//print_r($cats);

	// ir ver a variável que a página passa
	// comparar com os nomes das categorias
	// só mostrar os posts dessa categoria

	foreach ($cats as $cat) {
		//echo "ID: " . $cat->term_id . " Nome: ". $cat->name . "<br>";

		if ($cat->name == $custom_value[0]) {
			//echo "ENCONTREI-O!<br>";
			//echo "ESCOLHIDO - >ID: " . $cat->cat_id . " Nome: ". $cat->name . "<br>";
			$cat_id = $cat->term_id;
		}
	}

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
		query_posts(array('cat' =>$cat_id, 'posts_per_page' => -1));
	}

	get_header();
	//echo "<small>(A Mostrar só algumas categorias)</small>";
	//echo "<h2>A mostrar posts da categoria: ". $custom_value[0] . "</h2>";

	include 'navbar.php';
	include 'slideshow.php';

	if (have_posts()) { ?>

		<section>
			<div class="container carrega cor">
				<div class="tituloPag"> <?php echo $custom_value[0] ?></div>
				<div class="info nucleos">	

		<?php while (have_posts()) : the_post()?>

			<article>
				<?php

				if ($pagename == 'nucleos-2') {
					$titulo = get_post_meta($post->ID, 'sigla', true);
				}
				else {
					$titulo = get_the_title();
				}
				

				if ( has_post_thumbnail() ) {

					//$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
					//echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '" >';
					//echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); 
					//echo '</a>';

					//$meta =  get_post_meta(get_the_id(), 'sigla', true);
					//$meta =  get_post_custom();

					?>

					<div class="col-md-3 col-sm-4 col-xs-6 centrar">
						<a href="<?php the_permalink(); ?>"  class="radius button">
							<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
							<h4><?php echo $titulo; ?></h4>
						</a>
						
						
					</div>

					<?php

				} else { 

					

					?>


					<div class="col-md-3 col-sm-4 col-xs-6 centrar">
						<a href="<?php the_permalink(); ?>"  class="radius button">
							<img  src=" <?php echo get_template_directory_uri() . '/img/notfound.png'; ?>" alt="secção desportiva">
							<h4><?php echo $titulo; ?></h4>
						</a>

					</div>

				<?php 
				}
				//the_content( ); ?>
			</article>

		<?php endwhile; ?>

					</div>
				</div>
			</div>

		</section>

		<?php
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