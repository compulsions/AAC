<!--............................  SLIDESHOW + CALENDARIO................................. -->
	<section>
		<div class="container cor" id="show">
			<div class="col-md-8">
				<div class="gallery js-flickity"  data-flickity-options='{ "imagesLoaded": true, "percentPosition": false ,"autoPlay":5000, "wrapAround": true, "freeScroll": true}'>
			 	 	<img class="slides" src="<?php echo get_template_directory_uri() ?>/img/capa1.png" alt="..." />
			  		<img class="slides" src="<?php echo get_template_directory_uri() ?>/img/capa2.jpg" alt="..." />
			  		<img class="slides" src="<?php echo get_template_directory_uri() ?>/img/capa3.jpg" alt="" />
			  	</div>
			</div>
			<div id="agenda" class="col-md-4 agenda">

				<?php

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

						if ($cat->name == 'Eventos') {
							//echo "ENCONTREI-O!<br>";
							//echo "ESCOLHIDO - >ID: " . $cat->cat_id . " Nome: ". $cat->name . "<br>";

							// <div class="col-sm-3 col-xs-12 caixa_branca barralado carrega">
							$cat_id = $cat->term_id;
						}
					}
					query_posts(array('cat' =>$cat_id, 'posts_per_page' => 4, 'order' => 'ASC', 'orderby' => 'meta_value', 'meta_key' => 'data_evento'));

				?>
					<h3> Eventos Próximos </h3>
					<ol>
						<?php
		                if (have_posts()) {
		                   while (have_posts()) : the_post();
						   		$link = get_post_custom_values('link_evento');
								if ($link[0] == "") {
									$link[0] = "#";
								}
						   ?>

		                      <li><a href="<?php echo $link[0] ?>"><?php echo get_the_title(); ?></a></li>

		                   <?php endwhile;
		                }

		                wp_reset_query();
		                ?>
					</ol>


				<!-- <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=lc1a81t9selb2eq9mmagjsgppo%40group.calendar.google.com&amp;color=%23B1365F&amp;ctz=Europe%2FLisbon" style=" border-width:0 " width="100%" height="100%" frameborder="0" scrolling="no"></iframe> -->
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12 procura centrar">
                <form action="<?php echo home_url(); ?>" id="search-form" method="get">
                    <div class="col-md-8 col-sm-12">
                        <input type="text" name="s" id="s" value="Pesquisa" onblur="if(this.value=='')this.value='Pesquisa'"
    onfocus="if(this.value=='Pesquisa')this.value=''" />
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <input class ="botao_pesquisa" type="submit" value="Pesquisa" />
                    </div>
                </form>
			</div>
		</div>
	</section>
<!-- .................................................................................... -->
