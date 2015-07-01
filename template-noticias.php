<?php /*
	Template Name: Notícias
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

	// Paginação
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
	  'posts_per_page' => $number_posts_per_page,
	  'paged' => $paged,
	  'cat' => $cat_id
	);

	query_posts($args);

	get_header();
	include 'navbar.php';
	include 'slideshow.php';
	
	if (have_posts()) { ?>


		<section>
			<div id="noticias" class="container centrar cor">
				<div class="tituloPag"> <?php get_the_title( ); ?></div>
			</div>
			<br>
			<div class="container padding">

		<?php while (have_posts()) : the_post()?>

				<?php

					$titulo = get_post_meta($post->ID, 'sigla', true);
			
					$titulo = get_the_title();
				

				//the_content( ); ?>

		<?php endwhile; ?>

		</div>
		</section>

		<?php

	} else {
		echo "<p>No content Found</p>";
	}

	wp_reset_query();


	get_footer();
?>