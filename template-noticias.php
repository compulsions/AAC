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
         <div class="row">


		   <div class="col-sm-12 tituloPag"> <?php echo $title ?></div>
         <div class="col-md-12">
            <div class="tags_noticias">
               <?php wp_tag_cloud( 'smallest=10&largest=10' ); ?>
            </div>
         </div>

         </div>
		</div>
		<br>
   </section>

	<?php
	if (have_posts()) { ?>

		<div class="container padding">
         <div class="row">

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
                  <br>
   					<a class="lermais" href="<?php echo get_permalink( ); ?>"> Ler mais </a>
   				</a>

   				</div>
   			</div>


   		<?php endwhile; ?>
            </div>

            <div class="row">
               <div class="alignleft col-sm-6"><?php next_posts_link( '< Older posts' ); ?></div>
               <div class="alignright col-sm-6"><?php previous_posts_link( 'Newer posts >' ); ?></div>
            </div>

		</div>

		<?php

	} else {
		echo "<p>No content Found</p>";
	}
	?>

	<?php

	wp_reset_query();


	get_footer();
?>
