<!DOCTYPE html>
<html <?php language_attributes( );?>>
<head>
	<title><?php bloginfo('name'); ?></title>

    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>

	
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link href="img/favicon.png" rel="shortcut icon">
    
   
</head>
<body <?php body_class(); ?>>

    <?php
    if (! is_home()) { 
    ?>
                
	<header style="margin-bottom:10px;" class="branco">
		<div class="container titulo">
			<div class="aac">
				<div class="col-md-1 col-sm-1 col-xs-12">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri()?>/img/aac2.png" alt="aac"> 
					</a> 
				</div>
				<div class="col-md-11 col-sm-10 col-xs-12 txt">
					| <?php bloginfo('name'); ?> 
				</div>	
			</div> 
		</div>
        
        <?php
            }
        ?>

		<?php

		?>
 
		
	</header>