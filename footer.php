	<footer class="site-footer">
		
    <nav class="site-nav">        
    <?php
        $args = array(
            'theme_location' => 'footer'
        );	
			 
        // wp_nav_menu(  $args );
    ?>        
		</nav> 
        
        <div class="container barra_preta">
            <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-6">
                <p><a href="https://www.facebook.com/DGAAC?fref=ts" target="_blank">Facebook</a></p>
				<p><a href="http://original.livestream.com/tvaac" target="_blank">TVAAC</a></p>
				<p><a href="http://www.ruc.pt/wp-content/themes/ruc/player.php#" target="_blank">RUC</a></p>
            </div>
            
            <div class="col-md-3 col-sm-6 col-xxs-3 centrar">
				<br>
				<p>Tel: 239 410 400</p>
				<p>Fax: 239 410 439</p>
				<p>geral@academica.pt</p>
			</div>

			<div class="col-md-3 col-sm-6 col-xxs-3 centrar">
            <address>
				<br>
				<p>Rua Padre António Vieira N.º 1</p>
				<p>3000-315 Coimbra, Portugal</p>
            </address>
			</div>

			<div class="col-md-3 col-sm-6 col-xxs-3">

				<div class="col-md-4 col-xxs-4 centrar">
					<img align="center" class="patro pw_100" align="center" src="<?php echo get_template_directory_uri() . "/img/patrocinadores/uc.png" ?>">
				</div>

				<div class="col-md-4 col-xxs-4 centrar">
					<img align="center" class="patro pw_100" align="center" src="<?php echo get_template_directory_uri() . "/img/patrocinadores/sasuc.png" ?>">
				</div>

				<div class="col-md-4 col-xxs-4 centrar">
					<img align="center" class="patro pw_100" align="center" src="<?php echo get_template_directory_uri() . "/img/patrocinadores/montepio.png" ?>">
				</div>

				<div class="col-md-4 col-xxs-4 centrar">
					<img align="center" class="patro pw_70" align="center" src="<?php echo get_template_directory_uri() . "/img/patrocinadores/moche.png" ?>">
				</div>

				<div class="col-md-4 col-xxs-4 centrar">
					<img align="center" class="patro pw_70" align="center" src="<?php echo get_template_directory_uri() . "/img/patrocinadores/superbock.png" ?>">
				</div>
				<div class="col-md-4 col-xxs-4 centrar">
					<img align="center" class="patro2 pw_70" align="center" src="<?php echo get_template_directory_uri() . "/img/patrocinadores/ipdj.png" ?>">
				</div>
        </div>
        
		
		<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>
	
	</footer>

</div>

<?php wp_footer(); ?>
</body>
</html>