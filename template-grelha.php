<?php /*
	Template Name: Grelha
	*/


	$cat_id;
	$cats = get_categories( );

	$custom_value = get_post_custom_values('categoria');
	$page_title = $custom_value[0];


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


	//Mostra todas as páginas dessa categoria
	query_posts(array('cat' =>$cat_id, 'posts_per_page' => -1));

	get_header();
	//echo "<small>(A Mostrar só algumas categorias)</small>";
	//echo "<h2>A mostrar posts da categoria: ". $custom_value[0] . "</h2>";

	include 'navbar.php';
	include 'slideshow.php';

	if (have_posts()) { ?>
		<section>
			<div id="noticias" class="container centrar cor">
	         <div class="row">


			   <div class="tituloPag" style="text-align: center; margin-left: 0;"> <?php echo $page_title ?></div>
	         <div class="col-md-12">
	         </div>

	         </div>
			</div>
			<br>
	   </section>

		<section>
			<div class="container carrega cor">
				<div class="info nucleos" style="padding-top: 40px;">

		<?php while (have_posts()) : the_post()?>


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


		<?php endwhile; ?>

					</div>
				</div>
			</div>

		</section>

		<?php

	} else {
		echo "<p>No content Found</p>";
	}

	wp_reset_query();


	get_footer();
?>
