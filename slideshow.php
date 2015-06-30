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

				<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=lc1a81t9selb2eq9mmagjsgppo%40group.calendar.google.com&amp;color=%23B1365F&amp;ctz=Europe%2FLisbon" style=" border-width:0" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
			</div>

			<div class="col-md-4 procura">
                <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
				    <input type="text" placeholder="procura" autofocus />
				    <button type="submit"> PROCURAR</button>
                </form>
			</div>
		</div>
	</section>
<!-- .................................................................................... -->