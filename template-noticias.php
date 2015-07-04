<?php /*
	Template Name: Notícias
	*/

   get_header();

	$numNoticias = 0;
	$number_posts_per_page = 8;

	$cat_id;
	$cats = get_categories( );

	$custom_value = get_post_custom_values('categoria');

	foreach ($cats as $cat) {
		if ($cat->name == $custom_value[0]) {
			$cat_id = $cat->term_id;
		}
	}

	// Paginação
   if ( $custom_value != "") {
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
   	$args = array(
   	  'posts_per_page' => $number_posts_per_page,
   	  'paged' => $paged,
   	  'cat' => $cat_id
   	);

      $title = get_the_title();
   }
   if ( $custom_value == "" && single_tag_title("", false) ) {
      $tag_temp = single_tag_title("", false);
   	$args = array(
   	  'posts_per_page' => $number_posts_per_page,
   	  'paged' => $paged,
   	  'tag' => $tag_temp
   	);

      $title = "Mostrando notícias com a etiqueta: " . $tag_temp;
   }

	query_posts($args);

	include 'navbar.php';
	include 'slideshow.php';

	?>
	<section>
		<div id="noticias" class="container centrar cor">
			<div class="tituloPag"> <?php echo $title ?></div>
        <ul class="tags_noticias">
        <?php wp_tag_cloud( 'smallest=10&largest=10' ); ?>
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
                  <?php // se tiver thumbnail, mostra, se não, mostra a cena da imagem não disponível ?>
                  <?php if ( has_post_thumbnail() ) { ?>
                     <?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'alt' => 'noticia', 'class' => 'img-responsive' ));
                  }

                  else { ?>
						   <img src="<?php echo get_template_directory_uri() ?>/img/notfound.png" alt="noticia">
					   <?php } ?>
               </div>

					<?php echo $reduzido ?>
					<a class="lermais" href="<?php echo get_permalink( ); ?>"> Ler mais </a>
				</a>

				</div>
			</div>


		<?php endwhile; ?>

         <div class="botoes col-sm-12">
             <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
             <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
         </div>

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
