<?php /*
	Template Name: Repúblicas 2
	*/

	get_header();
	//echo "<small>(A Mostrar só algumas categorias)</small>";
	//echo "<h2>A mostrar posts da categoria: ". $custom_value[0] . "</h2>";

	include 'navbar.php';
	include 'slideshow.php';

	$numRepublicas = 0;
	$latRepublicas = array();
	$longRepublicas = array();

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


	// Mostrar conteúdo da página (introdução)
	if (have_posts()) { ?>

		<section id="inicial">
			<div class="container">
				<div class="row cor">
					<div class="col-md-12 tituloPag centrar"> <?php echo $custom_value[0] ?></div>

					<div class="info col-md-12 diminui">

					<?php

					while (have_posts()) : the_post() ?>

						<?php
							$titulo = get_the_title();

							the_content( );
						?>

					<?php endwhile; ?>

					</div>

				</div>
			</div>
		</section>

	<?php
	} else {
		echo "<p>No content Found</p>";
	}


	// Para cada república
	$args = array('cat' =>$cat_id, 'posts_per_page' => -1);
	$query_republicas = new WP_Query( $args );

	if ($query_republicas->have_posts()) { ?>
		<section>

			<div class="container padding">
				<div class="row">

				<?php while ($query_republicas->have_posts()) : $query_republicas->the_post()?>

					<div id="republica<?php echo $numRepublicas; ?>" class="col-sm-6">
						<div class="republica republica-block cor">
							<a href="<?php echo get_permalink(); ?>">

								<div class="subtituloPagM"><?php echo get_the_title(); ?></div>

								<?php
								the_content( );

								// Vai buscar latitude da república, põe no array
								$lat_temp =  get_post_custom_values('latitude');
								array_push($latRepublicas, $lat_temp[0]);

								// Vai buscar latitude da república, põe no array
								$long_temp =  get_post_custom_values('longitude');
								array_push($longRepublicas, $long_temp[0]);

								?>

								<div id="mapa<?php echo $numRepublicas; ?>" class="mapa">
									<p><div id="mapa-<?php echo $numRepublicas ?>" style="height:150px;"></div></p>
								</div>

							</a>
						</div>
					</div>

					<?php
					$numRepublicas++;

					endwhile;
					wp_reset_postdata();
					?>

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

<script>

	var latitudes = [];
	var longitudes = [];

	<?php

		foreach ($latRepublicas as $lats) {
			?>

			latitudes.push(<?php echo $lats ?>);

			<?php
		}

		foreach ($longRepublicas as $longs) {
			?>

			longitudes.push(<?php echo $longs ?>);

			<?php
		}

	?>
</script>
