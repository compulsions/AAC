  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
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
		<?php if ($cat[0]->name != 'Direção-Geral') { ?>

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


					<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array('width' => '90%'));
					?>

					<div class="button_fb" id="share_button" >
						<i class="fa fa-facebook-official"></i> Partilhar
						</div>
				

						
						<script type="text/javascript">
							$(document).ready(function(){
								$('#share_button').click(function(e){
									e.preventDefault();
									FB.ui({
										method: 'feed',
										name: '', // título
										link: 'http://localhost/wordpress/index.php/2015/06/26/aac-convida-personalidades-para-debates-sobre-educacao/',//por link de onde vem a noticia
										picture: 'http://www.academica.pt/wp-content/uploads/2012/10/aac1.png', 
										description: 'kdjfakjfkajd',
										caption: '',
										message: ''
									});
								});
							});
						</script>

					</div>
					<div class="col-md-8 borderesquerda noticia-cobaia">
						<?php

							if (have_posts()) :
								while (have_posts()) : the_post();
									?>

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
		} else {
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
