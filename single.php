

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
		<?php

		switch ($cat[0]->name) {
			case 'Direção-Geral':
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
	  				<div class="container padding">
					  <div class="row">

						 <div class="col-sm-3 col-xs-12 barralado carrega">
							<div class="cor">


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
						 </div>

						 <div class="col-sm-9 col-xs-12">
							 <div class="corpolado cor">
								 <div class="tituloPag" style="margin-left: 0px;">
								 	<a href=""><?php the_title(); ?></a>
								 </div>
								<?php
									if (have_posts()) {
										while (have_posts()) : the_post();
											the_content();
										endwhile;
									}
								?>
							</div>
						 </div>

					  </div>
				   </div>
			   <?php
				break;

			case 'Núcleos':
				include 'minimal_voltar.php';
				break;

			case 'Conselho de Veteranos':
				include 'minimal.php';
				break;

			case 'Conselho Fiscal':
				include 'minimal_cf.php';
				break;

			case 'Mesa da Assembleia Magna':
				include 'minimal.php';
				break;

			case 'Queima das Fitas':
				include 'minimal.php';
				break;

			case 'Festa das Latas':
				include 'minimal.php';
				break;

			case 'Secções Culturais':
				include 'minimal_voltar.php';
				break;

			case 'Organismos Autónomos':
				include 'minimal_voltar.php';
				break;

			case 'Grupos Académicos':
				include 'minimal_voltar.php';
				break;

			case 'Secções Desportivas':
				include 'minimal_voltar.php';
				break;


			case 'Notícias':

				// Se for notícias, põe já o jquery e o fontawesome
				//if ($cat]0]->name == 'Notícias') { ?>

					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

				<?php// } ?>

				<div class="container cor">
					<div class="tituloPag">

						<div class="row">
							<div class="col-sm-12">
								<a href=""><?php echo $cat->name; ?> <?php the_title(); ?></a>
							</div>

							<div class="col-sm-12">
								<a href="<?php echo $link_to_previous ?>" align="right" class ="botao_voltar">
								 VOLTAR
								</a>
							</div>

						</div>

					</div>
						<div class="col-md-2 col-sm-12 info centrar">
						<?php
							//echo get_the_post_thumbnail( $post->ID, 'thumbnail', array('width' => '90%'));

							// Nota: o início do loop não devia estar aqui, mas como é a página single, e ele vai ter sempre obrigatoriamente só um post
							// abre-se aqui para conseguir por o link e descição no btn de partilhar

							if (have_posts()) :
								while (have_posts()) : the_post();

								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
								$content = get_the_content('');
								$content = wp_trim_words( $content, 25, '' );
								$link = get_permalink();
								//$link = str_replace('//', 'p%3A%2F%2F', $link);
								$link = 'https://www.facebook.com/sharer/sharer.php?u='.$link;
						?>

						<div class="button_fb" id="share_button" >
							<a href="<?php echo $link; ?>" target="_blank"><i class="fa fa-facebook-official"></i> Partilhar </a>
						</div>

						</div>
						<div class="col-md-8 col-sm-12 info borderesquerda noticia-cobaia">
							<p>

								<?php the_content(); ?>

							</p>

							<?php

								endwhile;

								else :
									echo '<p>No content found</p>';

							endif;
							?>

						</div>

				</div>

				<?php
				break;

			default:
				// Se for notícias, põe já o jquery e o fontawesome
				//if ($cat]0]->name == 'Notícias') { ?>

					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

				<?php// } ?>

				<div class="container cor">
					<div class="tituloPag">

						<div class="row">
							<div class="col-sm-12">
								<a href=""><?php echo $cat->name; ?> <?php the_title(); ?></a>
							</div>

							<div class="col-sm-12">
								<a href="<?php echo $link_to_previous ?>" align="right" class ="botao_voltar">
								 VOLTAR
								</a>
							</div>

						</div>

					</div>
						<div class="col-md-3 info centrar">


						<?php

							if (have_posts()) :
								while (have_posts()) : the_post(); ?>

						</div>
						<div class="col-md-8 borderesquerda noticia-cobaia">
							<p>
								<?php the_content(); ?>
							</p>

							<?php

								endwhile;

								else :
									echo '<p>No content found</p>';

							endif;
							?>

						</div>

				</div>
				<?php
				break;
		} ?>


	</section>

<div id="fb-root"></div>
<script>
	window.fbAsyncInit = function() {
	FB.init({appId: '1483877931904022',
	 status: true,
	 cookie: true,
	 xfbml: true});
	};
	(function() {
		var e = document.createElement('script'); e.async = true;
		e.src = document.location.protocol +
		'//connect.facebook.net/pt_PT/all.js';
		document.getElementById('fb-root').appendChild(e);
	}());
</script>

	<?php
	get_footer();

?>
