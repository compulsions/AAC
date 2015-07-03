<?php /*
	Template Name: Notícias
	*/

    get_header();

	$numNoticias = 0;
	$number_posts_per_page = 3;

	$cat_id;
	$cats = get_categories( );

	$custom_value = get_post_custom_values('noticias');

	foreach ($cats as $cat) {
		if ($cat->name == $custom_value[0]) {
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

	include 'navbar.php';
	include 'slideshow.php';

	?>
	<section>
		<div id="noticias" class="container centrar cor">
			<div class="tituloPag"> <?php echo get_the_title( ); ?></div>
        <ul class="tags_noticias">
        <?php
            if (have_posts()) : while (have_posts()) : the_post();
                if( get_the_tag_list() ){
                    echo $posttags = get_the_tag_list('<li>','</li><li>','</li>');
                    }

            endwhile; endif; 
            wp_reset_query();
        ?>
        </ul>
		</div>
		<br>
	
	<?php
	if (have_posts()) { ?>
		
		<div class="container padding">

		<?php while (have_posts()) : the_post()?>
            
        <?php $content = get_the_content('');
            // conteudo a ser cortado, número de palavras que aparecem, texto de read more
            $reduzido = wp_trim_words( $content, 25, '' ); ?>
                       
        

			<div id="noticia<?php echo $numNoticias; ?>" class="col-md-3 col-sm-4 col-xs-6 col-xxs-12 blockR">
				<div class="noticia noticia-block cor">

				<?php
					// devia ter aqui um if para por uma classe se a foto for ao baixo ou ao alto
					$numNoticias++;
				?>

				<a href="<?php echo get_permalink( ); ?>">
					<div class="nomeNoticia">
						<p><?php echo get_the_title( ); ?></p>
					</div>
					<div class="img_noticia_ver">
						<img src="<?php echo get_template_directory_uri() ?>/img/notfound.png" alt="noticia">
					</div>
					<?php echo $reduzido ?>
					<a class="lermais" href="<?php echo get_permalink( ); ?>"> Ler mais </a>
				</a>

				</div>
			</div>


		<?php endwhile; ?>

		</div>

		<?php

	} else {
		echo "<p>No content Found</p>";
	}
	?>

	</section>

	<?php

	wp_reset_query();


	get_footer();
?>