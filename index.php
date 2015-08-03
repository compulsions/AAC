<?php
    get_header();
?>

    <div>
		<div class="gallery js-flickity"  data-flickity-options='{ "imagesLoaded": true, "percentPosition": false ,"wrapAround": true, "freeScroll": true}'>
		  <img class="homepagefoto" src="<?php echo get_template_directory_uri() . "/img/1.png"?>" alt="..." />
		  <img class="homepagefoto" src="<?php echo get_template_directory_uri() . "/img/1.png"?>" alt="..."s />
		</div>


		<div class="container titulo">
			<a href="index.php"><img src="<?php echo get_template_directory_uri() . "/img/aac2.png"?>" alt="aac" class="aac2"> </a>
			<h1 class="cenas"> Associação Académica de Coimbra </h1>
		</div>
	</div>

    <?php
        $numNoticias = 0;
    	$number_posts_per_page = 4;

    	$cat_id;
    	$cats = get_categories( );

    	//$custom_value = get_post_custom_values('categoria');
        $custom_value[0] = 'Notícias';

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

       // Tags (aqui não está a ser usado)
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
                   <div class="pull-left col-sm-6"><?php next_posts_link( '<  Notícias mais antigas' ); ?></div>
                   <div class="pull-right col-sm-6"><?php previous_posts_link( ' Notícias mais recentes >' ); ?></div>
                </div>

    		</div>

    		<?php

    	} else {
    		echo "<p>No content Found</p>";
    	}
        wp_reset_query();
        get_footer();
        ?>
